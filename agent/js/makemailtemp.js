var wah={};
var gresults=[];

// console.log(wah);

function gclone(obj){
    var ID = $(obj).attr("id");
    var parentid= $(obj).parent().attr("id");
    // console.log(parentid);
    // $("#"+ID).parent().clone().appendTo("#emailarea");
    $("#"+ID+" i").toggleClass("changetogreen");
    $("#"+parentid+" .checker > span").toggleClass("displaycheck");
    
    if(wah.hasOwnProperty(parentid)){
           delete wah[parentid];
          //  console.log(wah);
        }else{
          wah[parentid]={};
          // console.log(wah);
          $("#"+parentid+" .displaycheck i").removeClass("changetogreen");
        }

}

function sectionselector(ex){
    var sectionID=$(ex).attr("id");
    var sectionparentid= $(ex).parent().attr("id");
    // console.log(sectionparentid);
    var maincontainer= $(ex).parent().parent().attr("id");
    // console.log(sectionID);
    $("#"+sectionparentid+" .checker1 > span").toggleClass("displaycheck");
     $("#"+sectionID+" i").toggleClass("changetogreen");
    
    var $inputs = $("#"+maincontainer+" :input");
    var values = {};
    $inputs.each(function() {
      values[this.id] = $(this).val();
    });


    if(wah[maincontainer].hasOwnProperty(sectionparentid)){
        delete wah[maincontainer][sectionparentid];
          //  console.log(wah);
    }else{
         wah[maincontainer][sectionparentid]={};
         wah[maincontainer][sectionparentid]['price']=values;
          // console.log(wah);
        //   $("#"+sectionparentid+" .displaycheck i").removeClass("changetogreen");
    }

     if(wah[maincontainer][sectionparentid].hasOwnProperty(sectionID)){
           delete wah[maincontainer][sectionparentid]['realresult'];
          //  console.log(wah);
        }else{
          wah[maincontainer][sectionparentid]['realresult']={};
          // console.log(wah);
        //   $("#"+parentid+" .displaycheck i").removeClass("changetogreen");
        }
  
}

function sweepvalue(ex){
    var IDD = $(ex).attr("id");
    var parentidd= $(ex).parent().parent().parent().attr("id");
    var individualtripparent= $(ex).parent().parent().attr("id");
    var mainflight= $(ex).parent().attr("id");
    var resultval=$("#"+individualtripparent+" .displaycheck").attr("id");
    // console.log(resultval);
    var results=new Array();
    
    // if(wah[parentidd][individualtripparent].hasOwnProperty(mainflight)){
    //        delete wah[parentidd][individualtripparent][mainflight];
    //        console.log(wah);
    //     }else{
    //       wah[parentidd][individualtripparent][mainflight]=[];
    //       console.log(wah);
    //     //   $("#"+parentid+" .displaycheck i").removeClass("changetogreen");
    //     }

    var nameg=$("#"+mainflight+" ."+20+"g").attr("id");
     $("#"+IDD+" i").toggleClass("changetogreen");
        if(wah[parentidd][individualtripparent]['realresult'].hasOwnProperty(IDD)){
           delete wah[parentidd][individualtripparent]['realresult'][IDD];
          //  console.log(wah);
        }else{
           for(var i=0;i<=27;i++){
                if(i===6){
                  results.push($("#"+mainflight+" ."+i+"g").attr('src')); 
                }else{
                  results.push($("#"+mainflight+" ."+i+"g").text()); 
                }
            }
            var valueg=results;
            wah[parentidd][individualtripparent]['realresult'][IDD]=valueg;
            console.log(wah);
        }
}



