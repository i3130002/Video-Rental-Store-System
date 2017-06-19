var working = false;
$('.login').on('submit', function(e) {
  e.preventDefault();
  if (working) return;
  working = true;
  var $this = $(this),
    $state = $this.find('button > .state');
  $this.addClass('loading');
  $state.html('Authenticating');


  //  ajax request by i3130002

    var SendInfo = [];
    function trim(value) {
        return value.replace(/^\s+|\s+$/g,"");
    }
    function  append_chs(name,value) {
        console.log(name,value);

        var check_list = {
            name: name,
            value: value

        };
        SendInfo.push(check_list);
    }
    append_chs("username",$("[name=username]")[0].value);
    append_chs("password",$("[name=password]")[0].value);

    $.post( "Login.php", SendInfo)
        .done(function(data ) {
            // alert( data );
            console.log("data:",data);
            console.log("data:",data.trim()==="correct");
            if (data.trim()==='correct')
            {

                setTimeout(function() {
                    $this.addClass('ok');
                    $state.html('Welcome back!');
                },300);
                window.location="../Dashboard";
            }
            else {
                setTimeout(function() {
                alert("incorrect");
                },300);
            }
        })
        .fail(function() {
            alert( "error" );
        });

    //end ajax


      $state.html('Log in');
      $this.removeClass('ok loading');
      working = false;


});