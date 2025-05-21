// grabs the elements from the html
//these are used to display month/year, day cells(the boxes that store the day numbers), and navigation buttons
const monthYear = document.getElementById("month-year");
const calendarDays = document.getElementById("calendar-days");
const prevBtn = document.getElementById("prev");
const nextBtn = document.getElementById("next");

//sets current date to today
let currentDate = new Date();

//builds the calendar
function renderCalendar(date) {
    //gets the year(2025) and month (jan=0, feb=1, march=2, etc)
    const year = date.getFullYear();
    const month = date.getMonth();

    //get the weekday of the first day of the month (sun=0, mon=1, tue=2, etc)
    const firstDay = new Date(year, month, 1).getDay();
    //gets the last date of the month (28, 30, 31)
    const lastDate = new Date(year, month + 1, 0). getDate();

    //array with the names of the months
    const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"];

    //updates the heading in html(<h2 id="month-year">Month Year</h2>) to be the current month and year
    monthYear.textContent = `${monthNames[month]} ${year}`;

    //clears out old day cells before adding in new ones
    calendarDays.innerHTML = "";
    
    //aligns days of the week, so that monday is always the first column
    //even if it isnt the first day of the month
    let paddingDays = firstDay === 0 ? 6 : firstDay - 1;

    //adds empty day cells before the 1st of the month
    for (let i = 0; i < paddingDays; i++) {
        const emptyCell = document.createElement("div");
        calendarDays.appendChild(emptyCell);
    }

    //loops through all the days of the month and adds them to the calendar
    for (let day = 1; day <= lastDate; day++) {
        const dayCell = document.createElement("div");
    dayCell.textContent = day;
    calendarDays.appendChild(dayCell);
    }
}

//makes the buttons work 
//subtracts 1 from current month number to go back
prevBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar(currentDate);
});

//add 1 to current month number to go to the next month
nextBtn.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar(currentDate);
});

//calls the function to render the calendar
renderCalendar(currentDate);