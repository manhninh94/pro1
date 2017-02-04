/**
 * Created by Optiplex 790 on 11/4/2016.
 */
$(document).ready(function(){
   $("#filter-price").click(function(){

       var price_min = $(".min-price").val();
       var price_max = $(".max-price").val();
       //var parameter = [];
       parameter=getUrlVars();
       parameter['filter-price']=price_min+"-"+price_max;

       var result=$.param(parameter);
       var url = "?"+result;
       window.location.href=url;
   });

    $('.remove-filter').click(function(){

        var parameter = getUrlVars();

        delete parameter['filter-price'];
        var result=$.param(parameter);
        var url = "?"+result;
        window.location.href=url;

    });

  function getUrlVars()
  {
      var vars = {}, hash;
      var search = window.location.search;
      if(search.indexOf('?')==-1){
      }else{
        search=search.substring(1,search.length);
        hashes=search.split('&');
          console.log(hashes);
        for(var i=0;i<hashes.length;i++){
          hash=hashes[i].split('=');
          vars[hash[0]]=hash[1];
        }

      }
      return vars;
  }


});
