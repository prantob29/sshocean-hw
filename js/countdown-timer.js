function getTimeRemaining(endtime) {
  let t = Date.parse(endtime) - Date.parse(new Date());
  let seconds = Math.floor((t / 1000) % 60);
  let minutes = Math.floor((t / 1000 / 60) % 60);
  let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  return {
    total: t,
    hours: hours,
    minutes: minutes,
    seconds: seconds
  };
}
 
function initializeClock(id, endtime) {
  let clock = document.getElementById("countdown");
  let hoursSpan = clock.querySelector(".hours");
  let minutesSpan = clock.querySelector(".minutes");
  let secondsSpan = clock.querySelector(".seconds");
 
  function updateClock() {
    let t = getTimeRemaining(endtime);
 
    if (t.total <= 0) {
      clearInterval(timeinterval);
      let deadline = new Date(Date.parse(new Date()) + 5 * 1000);
      initializeClock('countdown', deadline);
    }
 
    hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
    minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
    secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
  }
 
  updateClock();
  let timeinterval = setInterval(updateClock, 1000);
}
 
let deadline = new Date(Date.parse(new Date()) + 43200 * 1000);
initializeClock("countdown", deadline);