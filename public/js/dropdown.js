/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$("#estado").change(function(event){
    $.get("municipio/"+event.target.value+"",function(response,state){
        console.log();
    });
});