document.addEventListener('DOMContentLoaded', function() {
    function copyToClipboard(text) {
        window.prompt('Silahkan lakukan: Ctrl+C untuk menyalin', text);
    }

    function generatePass(pwField) {
        var newPassword = '';
        var chars = 'abcdefghijklmnopqrstuvwxyz';
        var pwLength = document.getElementById('pwLength');
        var caps = document.getElementById('caps');
        var special = document.getElementById('special');
        var numbers = document.getElementById('numbers');

        if (caps.checked) {
            chars = chars.concat('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        }

        if (special.checked) {
            chars = chars.concat('!@#$%^&*');
        }

        if (numbers.checked) {
            chars = chars.concat('123456789');
        }

        for (var i = pwLength.value; i > 0; --i) {
            newPassword += chars[Math.round(Math.random() * (chars.length - 1))];
        }

        pwField.value = newPassword;
    }
    
    var gen = document.querySelector('.btn-primary');
    var copy = document.querySelector('.btn-outline-primary');
    var pwField = document.getElementById('password');
    
    // Why does this work but
    // gen.addEventListener('click', generatePass(pwField));
    // doesn't?
    gen.addEventListener('click', function() {
        generatePass(pwField);
    });
    
    copy.addEventListener('click', function() {
        copyToClipboard(pwField.value);
    });
})