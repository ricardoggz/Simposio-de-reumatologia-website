let radioInstitution = document.querySelectorAll('input[type="radio"][name="pertenece_institucion_publica"]');
let radioProfession = document.querySelectorAll('input[type="radio"][name="es_dermatologo"]');
let inputDisabledInstitution = document.getElementById('inputDisabledInstitution');
let inputDisabledProfession = document.getElementById('inputDisabledProfession');

inputDisabledInstitution.disabled=true;
inputDisabledInstitution.value='No aplica'

inputDisabledProfession.disabled=true;
inputDisabledProfession.value='No aplica'

for (var i = 0; i < radioInstitution.length; i++) {
    radioInstitution[i].addEventListener('change', function() {
    if (this.value === 'si') {
        inputDisabledInstitution.disabled = false;
    } else {
        inputDisabledInstitution.disabled = true;
        inputDisabledInstitution.value='No aplica';
    }
});
}

for (var i = 0; i < radioProfession.length; i++) {
    radioProfession[i].addEventListener('change', function() {
    if (this.value === 'no') {
        inputDisabledProfession.disabled = false;
    } else {
        inputDisabledProfession.disabled = true;
        inputDisabledProfession.value='No aplica';
    }
});
}