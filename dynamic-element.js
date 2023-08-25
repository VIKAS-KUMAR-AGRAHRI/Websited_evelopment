
function inc(val){        
    //console.log(val);

    if (val=="p") {
      //Create Text element.......... 
        var div = document.createElement('label');
        div.innerText="Project Name";
        div.setAttribute('id', 'text_name');
        document.getElementById('addhere').appendChild(div);
          


      //Project name related......................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'pro_name[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'name');
          document.getElementById('addhere').appendChild(h1);
          //project name related end here.........
              //Create Text element.......... 
            var div = document.createElement('label');
            div.innerText="Project Description";
            div.setAttribute('id', 'text_des');
            document.getElementById('addhere').appendChild(div);
          //Project description related......................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'pro_des[]');
          
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'des');
          document.getElementById('addhere').appendChild(h1);
          //project description related end here.........

          //Project duration related......................
                //Create Text element.......... 
              var div = document.createElement('label');
              div.innerText="Project Duration";
              div.setAttribute('id', 'text_dur');
              document.getElementById('addhere').appendChild(div);
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'pro_dur[]');
          
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'dur');
          document.getElementById('addhere').appendChild(h1);
          var h1=document.createElement('br');
          h1.setAttribute('id','br')
          document.getElementById('addhere').appendChild(h1);
          //project duration related end here.........

          
         
    }
    else if(val=="m")
    {
      //Element removed code................................................................
      var n = document.getElementById("name");
      document.getElementById('addhere').removeChild(n);
      var d= document.getElementById("des");
      document.getElementById('addhere').removeChild(d);
      var du= document.getElementById("dur");
      document.getElementById('addhere').removeChild(du);
      //label removed code..........................................................................
      var n = document.getElementById("text_name");
      document.getElementById('addhere').removeChild(n);
      var d= document.getElementById("text_des");
      document.getElementById('addhere').removeChild(d);
      var du= document.getElementById("text_dur");
      document.getElementById('addhere').removeChild(du);
      document.getElementById('addhere').removeChild(document.getElementById("br"));
      alert("child removed");
    }
  }

//Company related dynamic element .............................................................................
function company(val){        
      if (val=="p") {
        var div = document.createElement('label');
        div.innerText="Experience Technology";
        div.setAttribute('id', 'text_exp');
        document.getElementById('addproject').appendChild(div);
          

//Technology related......................................................................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'exp[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'exp');
          document.getElementById('addproject').appendChild(h1);
    //Technology related end here###########################################################3
              //Create Text element.......... 
            var div = document.createElement('label');
            div.innerText="Experience Company";
            div.setAttribute('id', 'text_cmp');
            document.getElementById('addproject').appendChild(div);
//Experience company related.............................................................................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'exp_cmp[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'exp_c');
          document.getElementById('addproject').appendChild(h1);
  //Experience company related end here#################################################################

  //Experience year related.............................................................................
                //Create Text element.......... 
              var div = document.createElement('label');
              div.innerText="Experience Year";
              div.setAttribute('id', 'text_year');
              document.getElementById('addproject').appendChild(div);
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'exp_year[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'exp_y');
          document.getElementById('addproject').appendChild(h1);
  //Experience Description related element creation.................................................
          var div = document.createElement('label');
              div.innerText="Experience Description";
              div.setAttribute('id', 'text_des');
              document.getElementById('addproject').appendChild(div);
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'exp_des[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'exp_des');
          document.getElementById('addproject').appendChild(h1);
//Add br tag here##############################################################################
          var h1=document.createElement('br');
          h1.setAttribute('id','br')
          document.getElementById('addproject').appendChild(h1);

    //Experience Description related element end here##############################################################################
         
    }
    else if(val=="m")
    {
      //Element removed code................................................................
      var n = document.getElementById("exp");
      document.getElementById('addproject').removeChild(n);
      var d= document.getElementById("exp_c");
      document.getElementById('addproject').removeChild(d);
      var du= document.getElementById("exp_y");
      document.getElementById('addproject').removeChild(du);
      var du= document.getElementById("exp_des");
      document.getElementById('addproject').removeChild(du);
      //label removed code..........................................................................
      var n = document.getElementById("text_exp");
      document.getElementById('addproject').removeChild(n);
      var d= document.getElementById("text_cmp");
      document.getElementById('addproject').removeChild(d);
      var du= document.getElementById("text_year");
      document.getElementById('addproject').removeChild(du);
      var du= document.getElementById("text_des");
      document.getElementById('addproject').removeChild(du);
      document.getElementById('addproject').removeChild(document.getElementById("br"));
      alert("child removed");
    }
  }
//Company related dynamic element creation end ##########################################################
//Education related dynamic element creation......................................................

function edu(val){        
      if (val=="p") {
        var div = document.createElement('label');
        div.innerText="Experience Technology";
        div.setAttribute('id', 'text_edu');
        document.getElementById('addedu').appendChild(div);
          

//Technology related......................................................................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'edu_name[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'edu_name');
          document.getElementById('addedu').appendChild(h1);
    //Technology related end here###########################################################3
              //Create Text element.......... 
            var div = document.createElement('label');
            div.innerText="Education_year";
            div.setAttribute('id', 'text_edu_year');
            document.getElementById('addedu').appendChild(div);
//Experience company related.............................................................................
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'edu_year[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'edu_year');
          document.getElementById('addedu').appendChild(h1);
  //Experience company related end here#################################################################

  //Experience year related.............................................................................
                //Create Text element.......... 
              var div = document.createElement('label');
              div.innerText="Education college";
              div.setAttribute('id', 'text_edu_coll');
              document.getElementById('addedu').appendChild(div);
      var h1 = document.createElement('input');
          h1.setAttribute('type', 'text');
          h1.setAttribute('name', 'edu_coll[]');
          h1.setAttribute('class', 'box');
          h1.setAttribute('id', 'edu_coll');
          document.getElementById('addedu').appendChild(h1);
          var h1=document.createElement('br');
          h1.setAttribute('id','br')
          document.getElementById('addedu').appendChild(h1);
    //Experience year end here##############################################################################
         
    }
    else if(val=="m")
    {
      //Element removed code................................................................
      var n = document.getElementById("edu_name");
      document.getElementById('addedu').removeChild(n);
      var d= document.getElementById("edu_year");
      document.getElementById('addedu').removeChild(d);
      var du= document.getElementById("edu_coll");
      document.getElementById('addedu').removeChild(du);
      //label removed code..........................................................................
      var n = document.getElementById("text_edu");
      document.getElementById('addedu').removeChild(n);
      var d= document.getElementById("text_edu_year");
      document.getElementById('addedu').removeChild(d);
      var du= document.getElementById("text_edu_coll");
      document.getElementById('addedu').removeChild(du);
      document.getElementById('addedu').removeChild(document.getElementById("br"));
      alert("child removed");
    }
  }