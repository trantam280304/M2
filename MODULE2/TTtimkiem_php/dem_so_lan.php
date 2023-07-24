<p id="so"></p>
​
<script>
    var numbers = [];
    for(var i = 1; i <= 100;i++){
        numbers.push(i);
    }
    var L = 0;
    var R = numbers.length - 1;
    var M = Math.floor( (L+R) / 2 ) ;
    document.getElementById('so').innerHTML = 'So do co phai la ' + numbers[M] + '?';
​
    function yes(){
		alert('Thanks !')
		location.reload();
    }
    function lon_hon(){
        R = M - 1;
        M = Math.floor( (L+R) / 2 ) ;
        document.getElementById('so').innerHTML = 'So do co phai la ' + numbers[M] + '?';
    }
    function nho_hon(){
        L = M + 1;
        M = Math.floor( (L+R) / 2 ) ;
        document.getElementById('so').innerHTML = 'So do co phai la ' + numbers[M] + '?';
    }
</script>
​
<button onclick="yes()"> Dung </button>
<button onclick="lon_hon()"> Lon hon </button>
<button onclick="nho_hon()"> Nho hon </button>