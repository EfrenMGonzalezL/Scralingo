var dropdown =  document.querySelector('.menu .dropdown');
var user_name = document.querySelector('.user-menu .user-name');
var caret = document.querySelector('.user-menu i');
var toggle_dropdown = false;

if(user_name) {
    user_name.addEventListener('click', function(e) {
        toggle_dropdown = !toggle_dropdown;

        if(toggle_dropdown) {
            dropdown.style.display = 'block';
            caret.className = "fas fa-caret-up";
        } else {
            caret.className = "fas fa-caret-down";
            dropdown.style.display = 'none';
        }
    })
}