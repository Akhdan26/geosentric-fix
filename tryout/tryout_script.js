document.addEventListener("DOMContentLoaded", function(){
    alert('Berdoalah sebelum mengerjakan.\nWaktu pengerjaan 2 jam.\nSemoga berhasil!')

    get_answered_no_soal_ajax()
    
    no_btn_click(current_j)
});

function get_answered_no_soal_ajax() {
    $.ajax({
        type: 'POST',
        url: 'get_answered_no_soal.php',
        data: {
            'email_user': email_user,
            'type_soal': type_soal
        },
        dataType: 'json'
    })
    .done(function(result) {
        if (result.data != null) {
            for (const no_soal of result.data) {
                _j = range_no_soal.indexOf(parseInt(no_soal['no_soal']))
                set_btn_already_answered(_j + 1)
            }
        }
    })
}
function prev_btn_click() {
    if(current_j>1) {
        const new_j = current_j-1
        no_btn_click(new_j)
    }
}
function next_btn_click() {
    if(current_j<100) {
        const new_j = current_j+1
        no_btn_click(new_j)
    }
}
function no_btn_click(_j) {
    submit_jawaban_ajax(range_no_soal[current_j - 1], current_j)

    prev_j = current_j

    current_j = _j

    set_active_no_soal_btn_color()

    get_soal_ajax(range_no_soal[current_j - 1])

    get_jawaban_ajax(range_no_soal[current_j - 1])

    set_flag_btn()
}

function submit_jawaban_ajax(_no_soal, _j) {
    function get_answer() {
        radio_btn_arr = document.querySelectorAll('input[name="answ_radio"]')
        for (const radio_btn of radio_btn_arr)
            if (radio_btn.checked) return radio_btn.value
        return null
    }

    jawaban = get_answer()

    is_update = document.getElementById('is_update').innerHTML

    if (jawaban != null || is_update == 'true') {
        $.ajax({
            type: 'POST',
            url: 'submit_jawaban.php',
            data: {
                'is_update': is_update,
                'email_user': email_user,
                'type_soal': type_soal,
                'no_soal': _no_soal,
                'jawaban': jawaban
            },
            dataType: 'json'
        })
        .done(function(result) {
            reset_btn()

            if (!result.is_success) 
                alert('Error! Please check your internet connection.')
            else set_btn_already_answered(_j)
        })
    }
}

function set_active_no_soal_btn_color() {
    document.getElementById(`no_soal_${prev_j}`).classList.remove('active')
    document.getElementById(`no_soal_${current_j}`).classList.add('active')
}   

function get_soal_ajax(_no_soal) {
    $.ajax({
        type: 'POST',
        url: 'get_soal.php',
        data: { 
            'type_soal': type_soal,
            'no_soal': _no_soal
        },
        dataType: 'json'
    })
    .done(function(result) {
        reset_jwb_gbr()
        if (result.data != null)
            show_soal(result.data)
        else soal_not_available(result)
    })

    function show_soal(data) {
        document.getElementById('no_soal').innerHTML = `<b>Soal No ${current_j}</b>`
        document.getElementById('soal_to').innerHTML = data['soal']
        document.getElementById('radio_a_value').innerHTML = `A. ${data['jwb_a']}`
        document.getElementById('radio_b_value').innerHTML = `B. ${data['jwb_b']}`
        document.getElementById('radio_c_value').innerHTML = `C. ${data['jwb_c']}`
        document.getElementById('radio_d_value').innerHTML = `D. ${data['jwb_d']}`
        document.getElementById('radio_e_value').innerHTML = `E. ${data['jwb_e']}`
        show_jwb_gbr(data)
    }

    function soal_not_available(result) {
        document.getElementById('no_soal').innerHTML = `<b>Soal No ${current_j}</b>`
        document.getElementById('soal_to').innerHTML = `Soal dengan tipe ${type_soal} dan nomor ${_no_soal} belum ada`
        document.getElementById('radio_a_value').innerHTML = 'A. -'
        document.getElementById('radio_b_value').innerHTML = 'B. -'
        document.getElementById('radio_c_value').innerHTML = 'C. -'
        document.getElementById('radio_d_value').innerHTML = 'D. -'
        document.getElementById('radio_e_value').innerHTML = 'E. -'
    }

    function reset_jwb_gbr() {
        document.getElementById('jwb_a_gbr').src=''
        document.getElementById('jwb_a_gbr').classList.remove('visually-hidden')
        document.getElementById('jwb_a_gbr').classList.add('visually-hidden')
        document.getElementById('jwb_b_gbr').src=''
        document.getElementById('jwb_b_gbr').classList.remove('visually-hidden')
        document.getElementById('jwb_b_gbr').classList.add('visually-hidden')
        document.getElementById('jwb_c_gbr').src=''
        document.getElementById('jwb_c_gbr').classList.remove('visually-hidden')
        document.getElementById('jwb_c_gbr').classList.add('visually-hidden')
        document.getElementById('jwb_d_gbr').src=''
        document.getElementById('jwb_d_gbr').classList.remove('visually-hidden')
        document.getElementById('jwb_d_gbr').classList.add('visually-hidden')
        document.getElementById('jwb_e_gbr').src=''
        document.getElementById('jwb_e_gbr').classList.remove('visually-hidden')
        document.getElementById('jwb_e_gbr').classList.add('visually-hidden')
    }

    function show_jwb_gbr(data) {
        if (data['jwb_a_gbr']!= '') {
            document.getElementById('jwb_a_gbr').src=`gambar_jwb/${data['jwb_a_gbr']}`
            document.getElementById('jwb_a_gbr').classList.remove('visually-hidden')
        }
        if (data['jwb_b_gbr']!= '') {
            document.getElementById('jwb_b_gbr').src=`gambar_jwb/${data['jwb_b_gbr']}`
            document.getElementById('jwb_b_gbr').classList.remove('visually-hidden')
        }
        if (data['jwb_c_gbr']!= '') {
            document.getElementById('jwb_c_gbr').src=`gambar_jwb/${data['jwb_c_gbr']}`
            document.getElementById('jwb_c_gbr').classList.remove('visually-hidden')
        }
        if (data['jwb_d_gbr']!= '') {
            document.getElementById('jwb_d_gbr').src=`gambar_jwb/${data['jwb_d_gbr']}`
            document.getElementById('jwb_d_gbr').classList.remove('visually-hidden')
        }
        if (data['jwb_e_gbr']!= '') {
            document.getElementById('jwb_e_gbr').src=`gambar_jwb/${data['jwb_e_gbr']}`
            document.getElementById('jwb_e_gbr').classList.remove('visually-hidden')
        }
    }
}

function get_jawaban_ajax(_no_soal) {
    $.ajax({
        type: 'POST',
        url: 'get_jawaban.php',
        data: {
            'email_user': email_user,
            'type_soal': type_soal,
            'no_soal': _no_soal
        },
        dataType: 'json'
    })
    .done(function(result) {
        if (result.data != null) {
            if (result.data['jawaban'] != '') {
                set_radio_answ_value(result.data['jawaban'])
                set_btn_already_answered(current_j)
            }
            document.getElementById('is_update').innerHTML = 'true'
        }
    })

    function set_radio_answ_value(jawaban) {
        jawaban = jawaban.toLowerCase()
        document.getElementById(`radio_${jawaban}`).checked = true
    }
}

function set_btn_already_answered(_j) {
    if (document.getElementById(`no_soal_${_j}`)
            .getElementsByClassName('page-link')[0].style.background != 'rgb(255, 255, 0)')
        document.getElementById(`no_soal_${_j}`)
            .getElementsByClassName('page-link')[0].style.background = '#00FF00'
}

function reset_btn() {
    document.getElementById('is_update').innerHTML = 'false'

    if (document.getElementById(`no_soal_${current_j}`)
            .getElementsByClassName('page-link')[0].style.background != 'rgb(255, 255, 0)')
            document.getElementById(`no_soal_${current_j}`)
                .getElementsByClassName('page-link')[0].style.background = null

    document.getElementById('radio_a').checked = false
    document.getElementById('radio_b').checked = false
    document.getElementById('radio_c').checked = false
    document.getElementById('radio_d').checked = false
    document.getElementById('radio_e').checked = false
}

function set_flag_btn() {
    current_btn = document.getElementById(`no_soal_${current_j}`)
        .getElementsByClassName('page-link')[0]
    ragu_text = document.getElementById('ragu-text')
    
    if (current_btn.style.background != 'rgb(255, 255, 0)') {
        ragu_text.innerHTML = 'Tandai'
        ragu_text.onclick = function() { set_btn_flag(current_btn, ragu_text) }
    }
    else {
        ragu_text.innerHTML = 'Hapus Tanda'
        ragu_text.onclick = function() { unset_btn_flag(current_btn, ragu_text) }
    }
}

function set_btn_flag(current_btn, ragu_text) {
    current_btn.style.color = '#000'
    current_btn.style.background = '#FFFF00'
    ragu_text.innerHTML = 'Hapus Tanda'
    ragu_text.onclick =  function() { unset_btn_flag(current_btn, ragu_text) }
}

function unset_btn_flag(current_btn, ragu_text) {
    current_btn.style.color = null
    current_btn.style.background = null
    ragu_text.innerHTML = 'Tandai'
    ragu_text.onclick = function() { set_btn_flag(current_btn, ragu_text) }
}