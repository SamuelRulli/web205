function countChar(val) {
    var len = val.value.length;
    
    if (len >= 250) {
        val.value = val.value.substring(0, 250);
    } else {
        $('#charNum').text(250 - len);
    }
};