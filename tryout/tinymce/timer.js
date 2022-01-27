var time_now = new Date().getTime()
var tryout_end_time = time_now.setMinutes(time_now.getMinutes() + 120);

var countdown_interval = setInterval('countdown()')

function countdown() {

    const subs = tryout_end_time - time_now

    if (subs < 0) stopCountdown()

    const days = 1000 * 60 * 60 * 24
    const hours = 1000 * 60 * 60
    const hours_value = Math.floor((subs % days) / hours)

    const mins = 1000 * 60
    const mins_value = Math.floor((subs % hours) / mins)

    const secs = 1000
    const secs_value = Math.floor((subs % mins) / secs)

    document.getElementById('hour').innerText = hours_value < 10 ? `0${hours_value}` : hours_value
    document.getElementById('minute').innerText = mins_value < 10 ? `0${mins_value}` : mins_value
    document.getElementById('second').innerText = secs_value < 10 ? `0${secs_value}` : secs_value
}

function stopCountdown() {
    alert('Waktu habis! Semoga nilaimu bagus!')
    clearInterval(countdown_interval)
    window.location = '../geolympic.php'
}

function finishAlert() {
    if (confirm('Yakin nih udah selesai?'))
        window.location = "../geolympic.php"
    else alert("Yaudah kerjain dulu aja brody! Semangat!!")
}
