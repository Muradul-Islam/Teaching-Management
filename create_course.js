const uploadButton = document.getElementById("upload-button");
const chooseImage = document.getElementById("chosen-image");


uploadButton.onchange = () => {
    const reader = new FileReader();
    reader.readAsDataURL(uploadButton.files[0]);

    console.log(uploadButton.files[0]);

    reader.onload = () => {
        chooseImage.setAttribute("src", reader.result);
    };

};