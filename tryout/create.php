<!DOCTYPE html>
<html>

<head>
    <title>Form Tambah Soal</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- tinymce text editor js -->
    <script src="tinymce/tinymce.min.js" referrerpolicy="origin"></script>
    <!-- wiris math tinymce -->
    <script>
        tinymce.init({
            selector: '#rich-editor',
            width: '100%',
            height: 300,
            plugins: 'image code lists',
            external_plugins: {
                tiny_mce_wiris: 'https://www.wiris.net/demo/plugins/tiny_mce/plugin.js'
            },
            toolbar: 'bold underline italic | tiny_mce_wiris_formulaEditor numlist bullist image',
            browser_spellcheck: true,
            menu: {
                file: {
                    title: 'File',
                    items: 'newdocument restoredraft | preview | print'
                },
                edit: {
                    title: 'Edit',
                    items: 'undo redo | cut copy paste | selectall | searchreplace'
                },
                view: {
                    title: 'View',
                    items: 'code | visualaid visualchars visualblocks | preview fullscreen'
                },
                insert: {
                    title: 'Insert',
                    items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime'
                },
                format: {
                    title: 'Format',
                    items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat'
                },
                tools: {
                    title: 'Tools',
                    items: 'code wordcount'
                },
                table: {
                    title: 'Table',
                    items: 'inserttable | cell row column | tableprops deletetable'
                },
                help: {
                    title: 'Help',
                    items: 'help'
                }
            },
            branding: false,
            mobile: {
                menubar: true
            },
            // upload image functionality
            images_upload_url: 'upload.php',
            images_upload_handler: function(blobInfo, success, failure) {
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', 'upload.php');
                xhr.onload = function() {
                    var json;
                    if (xhr.status != 200) {
                        failure('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);
                    if (!json || typeof json.location != 'string') {
                        failure('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    success(json.location);
                };
                formData = new FormData();
                formData.append('file', blobInfo.blob(), blobInfo.filename());
                xhr.send(formData);
            },
        });
    </script>
</head>

<body>
    <div class="container">
        <?php
        //Include file koneksi, untuk koneksikan ke database
        include "config.php";

        //Fungsi untuk mencegah inputan karakter yang tidak sesuai
        function input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
        }
        //Cek apakah ada kiriman form dari method post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $no_soal = input($_POST["no_soal"]);
            $type_soal = input($_POST["type_soal"]);
            $soal = input($_POST["soal"]);
            $jwb_a = input($_POST["jwb_a"]);
            $jwb_b = input($_POST["jwb_b"]);
            $jwb_c = input($_POST["jwb_c"]);
            $jwb_d = input($_POST["jwb_d"]);
            $jwb_e = input($_POST["jwb_e"]);
            $kunci = input($_POST["kunci"]);
            $skor = input($_POST["bobot_skor"]);

            $jwb_a_gbr = $_FILES['jwb_a_gbr'];
            $jwb_b_gbr = $_FILES['jwb_b_gbr'];
            $jwb_c_gbr = $_FILES['jwb_c_gbr'];
            $jwb_d_gbr = $_FILES['jwb_d_gbr'];
            $jwb_e_gbr = $_FILES['jwb_e_gbr'];

            $imageDir = getcwd() . "/gambar_jwb/";
            $new_jwb_a_gbr_Name = "JWB_A_$no_soal." . pathinfo(basename($jwb_a_gbr['name']), PATHINFO_EXTENSION);
            $new_jwb_b_gbr_Name = "JWB_B_$no_soal." . pathinfo(basename($jwb_b_gbr['name']), PATHINFO_EXTENSION);
            $new_jwb_c_gbr_Name = "JWB_C_$no_soal." . pathinfo(basename($jwb_c_gbr['name']), PATHINFO_EXTENSION);
            $new_jwb_d_gbr_Name = "JWB_D_$no_soal." . pathinfo(basename($jwb_d_gbr['name']), PATHINFO_EXTENSION);
            $new_jwb_e_gbr_Name = "JWB_E_$no_soal." . pathinfo(basename($jwb_e_gbr['name']), PATHINFO_EXTENSION);

            move_uploaded_file($jwb_a_gbr['tmp_name'], $imageDir . $new_jwb_a_gbr_Name);
            move_uploaded_file($jwb_b_gbr['tmp_name'], $imageDir . $new_jwb_b_gbr_Name);
            move_uploaded_file($jwb_c_gbr['tmp_name'], $imageDir . $new_jwb_c_gbr_Name);
            move_uploaded_file($jwb_d_gbr['tmp_name'], $imageDir . $new_jwb_d_gbr_Name);
            move_uploaded_file($jwb_e_gbr['tmp_name'], $imageDir . $new_jwb_e_gbr_Name);

            //Query input menginput data kedalam tabel anggota
            $sql = "INSERT INTO tryout_soal (no_soal,type_soal,soal,jwb_a,jwb_b,jwb_c,jwb_d,jwb_e,kunci,bobot_skor,jwb_a_gbr,jwb_b_gbr,jwb_c_gbr,jwb_d_gbr,jwb_e_gbr) values 
            ('$no_soal','$type_soal','$soal','$jwb_a','$jwb_b','$jwb_c','$jwb_d','$jwb_e','$kunci','$skor','$new_jwb_a_gbr_Name','$new_jwb_b_gbr_Name','$new_jwb_c_gbr_Name','$new_jwb_d_gbr_Name','$new_jwb_e_gbr_Name')";

            //Mengeksekusi/menjalankan query diatas
            $hasil = mysqli_query($conn, $sql);

            //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
            if ($hasil) {
                header("Location:admin_soal.php");
            } else {
                echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
            }
        }
        ?>
        <h2>Input Data Soal</h2>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>No Soal</label>
                <input type="text" name="no_soal" class="form-control" placeholder="Masukan No Soal" required />
            </div>
            <br>
            <div class="form-group">
                <label>Type Soal</label>
                <select class="form-select" name="type_soal" id="type_soal">
                    <option selected>Pilih type soal</option>
                    <option value="1">type_a</option>
                    <option value="2">type_b</option>
                    <option value="3">type_c</option>
                    <option value="4">type_to</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Soal</label>
                <textarea name="soal" id="rich-editor"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban A</label>
                <input type="text" name="jwb_a" class="form-control" placeholder="Masukan Jawaban Opsi A" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_a_gbr" id="jwb_a_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban B</label>
                <input type="text" name="jwb_b" class="form-control" placeholder="Masukan Jawaban Opsi B" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_b_gbr" id="jwb_b_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban C</label>
                <input type="text" name="jwb_c" class="form-control" placeholder="Masukan Jawaban Opsi C" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_c_gbr" id="jwb_c_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban D</label>
                <input type="text" name="jwb_d" class="form-control" placeholder="Masukan Jawaban Opsi D" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_d_gbr" id="jwb_d_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban E</label>
                <input type="text" name="jwb_e" class="form-control" placeholder="Masukan Jawaban Opsi E" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_e_gbr" id="jwb_e_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Kunci Jawaban</label>
                <input type="text" name="kunci" class="form-control" placeholder="Masukan kunci dengan opsinya saja (ex. A,B,C,D,E)" required />
            </div>
            <br>
            <div class="form-group">
                <label>Bobot Skor</label>
                <input type="text" name="bobot_skor" class="form-control" placeholder="Masukkan bobot skor" value="<?php echo $data['bobot_skor']; ?>" required />
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>