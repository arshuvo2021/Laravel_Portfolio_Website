$(document).ready(function () {
$('#VisitorDt').DataTable();
$('.dataTables_length').addClass('bs-select');
});


function getServicesData(){

   axios.get('/getServicesData')
  .then(function(response) {
    var jsonData=response.data;
    console.log(jsonData);
  $.each(jsonData,function(i, item){
    $('<tr>').html(
       '<td><img class="table-img" src='+jsonData[i].service_img+'></td>'+
        '<td>'+ jsonData[i].service_name + '</td>'+
        '<td>'+ jsonData[i].service_des + '</td>'+
        '<td><a href=""><i class="fas fa-edit"> </i> </a> </td>'+
        '<td><a href=""><i class="fas fa-trash-alt"> </i></a></td>'
        ).appendTo('#service_table');
   });

}).catch(function(error) {

});

}

// function getServicesData(){

//   axios.get('/getServicesData')
//  .then((response)=> {
//    var jsonData=response.data;
//    console.log(jsonData);
//    const Data=jsonData.map((ars)=>{
//     '<td><img class="table-img" src='+ars.service_img+'></td>'+
//        '<td>'+ ars.service_name + '</td>'+
//        '<td>'+ars.service_des + '</td>'+
//        '<td><a href=""><i class="fas fa-edit"></i></a> </td>'+
//        '<td><a href=""><i class="fas fa-trash-alt"></i></a></td></tr>'
       
//    });

//    $('<tr>').html(Data).append('#service_table');
// }).catch(function(error) {

// });

// }