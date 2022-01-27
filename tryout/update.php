<?php
include("config.php");
// cek ada id di query string
if (!isset($_GET['id'])) {
    header('Location: admin_soal.php');
}
// ambil id dari query string
$id = $_GET['id'];
// query ambil data dari db
$sql = "SELECT * FROM tryout_soal WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Soal</title>
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
        <h2>Update Data</h2>

        <form action="proses_update.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>No Soal</label>
                <input type="text" name="no_soal" class="form-control" value="<?php echo $data['no_soal']; ?>" placeholder="Masukan No Soal" required />
            </div>
            <br>
            <div class="form-group">
                <label>Type Soal</label>
                <select class="form-select" name="type_soal" id="type_soal">
                    <option selected>Type saat ini <?php echo $data['type_soal']; ?></option>
                    <option value="1">type_a</option>
                    <option value="2">type_b</option>
                    <option value="3">type_c</option>
                    <option value="4">type_to</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label>Soal</label>
                <textarea name="soal" id="rich-editor"><?php echo $data['soal']; ?></textarea>
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban A</label>
                <input type="text" name="jwb_a" class="form-control" placeholder="Masukan Jawaban Opsi A" value="<?php echo $data['jwb_a']; ?>" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_a_gbr" id="jwb_a_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban B</label>
                <input type="text" name="jwb_b" class="form-control" placeholder="Masukan Jawaban Opsi B" value="<?php echo $data['jwb_b']; ?>" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_b_gbr" id="jwb_b_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban C</label>
                <input type="text" name="jwb_c" class="form-control" placeholder="Masukan Jawaban Opsi C" value="<?php echo $data['jwb_c']; ?>" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_c_gbr" id="jwb_c_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban D</label>
                <input type="text" name="jwb_d" class="form-control" placeholder="Masukan Jawaban Opsi D" value="<?php echo $data['jwb_d']; ?>" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_d_gbr" id="jwb_d_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Jawaban E</label>
                <input type="text" name="jwb_e" class="form-control" placeholder="Masukan Jawaban Opsi E" value="<?php echo $data['jwb_e']; ?>" />
                <br>
                <label>Input jawaban gambar</label>
                <input type="file" name="jwb_e_gbr" id="jwb_e_gbr" />
            </div>
            <br>
            <div class="form-group">
                <label>Kunci Jawaban</label>
                <input type="text" name="kunci" class="form-control" placeholder="Masukan kunci dengan opsinya saja (ex. A,B,C,D)" value="<?php echo $data['kunci']; ?>" required />

            </div>
            <br>
            <div class="form-group">
                <label>Bobot Skor</label>
                <input type="text" name="bobot_skor" class="form-control" placeholder="Masukan Jawaban Opsi E" value="<?php echo $data['bobot_skor']; ?>" required />
            </div>
            <br>
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>