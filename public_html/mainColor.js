$.ajax({
    type: "POST",
    url: "./cabinetCheck.php",
    data: "",
    success:  function(data){
        for(var i = 0; i < data["length"], i++){
            // console.log(i);
            // console.log(data[i]);
        }
    },
    dataType: "json"
});
