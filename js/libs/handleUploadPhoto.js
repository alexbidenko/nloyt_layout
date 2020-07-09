let handleUploadPhoto = function() {
    let photoInputs = document.querySelectorAll('.registrationBox__photoFile');
    photoInputs.forEach((input) => {
        input.onchange = function(e) {
            console.log(input.files);
            for (let key in input.files) {
                let f = input.files[key];
                let reader = new FileReader();
                reader.onload = function(e) {
                    input.closest('.registrationBox__photoBox').querySelector('.registrationBox__photoPreview').innerHTML = `<img src="${e.target.result}" alt="" class="registrationBox__photoPreviewImage">
                    <div class="registrationBox__photoPreviewMask">
                        <img src="img/delete-photo-icon.svg" alt="" class="registrationBox__photoPreviewDelete">
                        Изменить фото
                    </div>`;
                }
                reader.readAsDataURL(f);
            }
        }
    })
}