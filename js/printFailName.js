function uploadFile(target) {
    target.parentElement.parentElement.querySelector("#file-name").innerHTML = (target.files[0].name);
    target.parentElement.parentElement.querySelector("#file-size").innerHTML = Math.round(target.files[0].size / 1024) + "кБ из доступных 5мб" ;
}