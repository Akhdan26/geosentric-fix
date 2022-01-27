const tryout_start_time = new Date('Oct 3, 2021 09:55:00').getTime()

const tryout_end_time = new Date('Oct 3, 2021 11:55:00').getTime()

const start_to_btn = document.getElementById('start-to-btn')

const check_time_interval = setInterval('check_time()', 500)

function check_time() {
    const current_time = new Date().getTime()
    
    if (current_time - tryout_end_time > 0) {
        start_to_btn.style.background = '#A9A9A9'
        start_to_btn.href = '#'
        stop_check_time()
    }
    else if (current_time - tryout_start_time > 0) {
        start_to_btn.style.background = null
        start_to_btn.href = 'tryout/tryout.php'
        stop_check_time()
    }
}

function stop_check_time() {
    clearInterval(check_time_interval)
}
