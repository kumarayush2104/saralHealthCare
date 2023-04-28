function removeDoc(id) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == 0) {
                alert('Failed to remove ' + id);
            } else if(this.responseText == 1){
                alert(id + " removed successfully");
                location.reload();
            }
        }
    }

    xmlhttp.open('GET', 'include/script.php?type=remove&id=' + id, true);
    xmlhttp.send();
}

function remPac(id) {
    var cat = document.getElementById('cat' + id).innerHTML;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == 0) {
                alert('Failed to remove ' + id);
            } else if(this.responseText == 1){
                alert(id + " removed successfully");
                location.reload();
            }
        }
    }

    xmlhttp.open('GET', 'include/script2.php?type=remove&id=' + id + "&cat=" + cat , true);
    xmlhttp.send();
}

function addPac() {
    var id = document.getElementById('addpacname').value;
    var role = document.getElementById('addpaccat').value;
    var price = document.getElementById('addpacprice').value;

    if(id == "" || role == "") {
        alert('Empty Fields');
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == 0) {
                alert('Failed to add ' + id);
            } else if(this.responseText == 1){
                alert(id + " added successfully");
                location.reload();
            }
        }
    }

    xmlhttp.open('GET', 'include/script2.php?type=add&id=' + id + '&cat=' + role + '&price=' + price, true);
    xmlhttp.send();
}

function addDoc() {
    var id = document.getElementById('addname').value;
    var role = document.getElementById('addrole').value;

    if(id == "" || role == "") {
        alert('Empty Fields');
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == 0) {
                alert('Failed to add ' + id);
            } else if(this.responseText == 1){
                alert(id + " added successfully");
                location.reload();
            }
        }
    }

    xmlhttp.open('GET', 'include/script.php?type=add&id=' + id + '&role=' + role, true);
    xmlhttp.send();
}

function uploadPic() {
    var fileData = $('#pic').prop('files');
    var formData = new FormData();
    for(i = 0; i < fileData.length; i++) {
        formData.append("pic" + i, fileData[i]);
    }
    
    $.ajax({
        url: 'include/upload.php',
        cache: false,
        processData: false,
        contentType: false,
        data: formData,
        type: 'post',
        success: function(responseText) {
            alert("Upload Successful");
            location.reload();
        }
    });
}


function upPac(id) {
    var name = document.getElementById('name' + id).value;
    var cat = document.getElementById('cat' + id).innerHTML;
    var price = document.getElementById('price' + id).value;

    if(name == "" || price == "") {
        alert('Empty Fields');
        return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if(this.status == 200 && this.readyState == 4) {
            if(this.responseText == 0) {
                alert('Failed to update ' + id);
            } else if(this.responseText == 1){
                alert(id + " updated successfully");
                location.reload();
            }
        }
    }

    xmlhttp.open('GET', 'include/script2.php?type=update&name=' + name + '&cat=' + cat + '&price=' + price + '&id=' + id, true);
    xmlhttp.send();
}

