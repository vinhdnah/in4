function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.now();
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
  var redirectButton = document.getElementById('redirectButton'); // Nút chuyển trang

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    // Kiểm tra khi hết giờ
    if (t.total <= 0) {
      clearInterval(timeinterval);
      clock.style.display = 'none'; // Ẩn đồng hồ đếm ngược
      redirectButton.style.display = 'block'; // Hiển thị nút
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

// Cài đặt deadline là ngày 26/10/2024 lúc 20:00 (8pm)
var deadline = new Date('2024-10-26T07:00:00');
initializeClock('clockdiv', deadline);
