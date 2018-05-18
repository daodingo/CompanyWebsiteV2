function showfield(name) {
    if(name=='other')document.getElementById('other-field').innerHTML='Please Specify For Other: <span class="green-asterisk">*</span><br> <input spellcheck="false" class="input-field" type="text" name="other" />';
    else document.getElementById('other-field').innerHTML='';
}
