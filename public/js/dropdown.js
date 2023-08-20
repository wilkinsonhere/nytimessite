let dropdownButton = document.getElementById('dropdownButton');
let dropdown = document.getElementById('dropdownContainer');

dropdownButton.addEventListener('click', (e) => {
    e.preventDefault();

    if (dropdown.classList.contains('active')) {
        dropdown.classList.remove('active');
    }
    else {
        dropdown.classList.add('active');
    }
})
