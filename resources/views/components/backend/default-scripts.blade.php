<!-- bundle -->
<script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

<!-- third party js -->
<!-- <script src="assets/js/vendor/Chart.bundle.min.js"></script> -->
<script src="{{ asset('backend/assets/js/vendor/apexcharts.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>

{{-- <!-- third party js ends -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/svg.js/2.6.5/svg.js"></script>

<script >
    window.onload = function(){
    var pos = 0;
    var draw = SVG('svg')
    var left = draw.circle(50, 50)
    var right = draw.circle(50, 50)
    var l = draw.circle(10,10).attr({fill: '#fff'})
    var r = draw.circle(10,10).attr({fill: '#fff'})

    l.move(30,130)
    r.move(130,130)
    left.move(20,100)
    right.move(120,100)

    document.getElementById('emailaddress').addEventListener('keyup', e => {
        e.target.setAttribute("type", "text");
        pos = e.target.selectionStart;
        if(pos<21){
            l.move(pos*1.2+30)
            r.move(pos*1.2+130)
        }
    })

    document.getElementById('emailaddress').addEventListener('focus',(e)=>{
        l.animate(100).move(pos+30, 130)
        r.animate(100).move(pos+130, 130)
        document.getElementById('emailaddress').setAttribute("type", "email");
    })

    document.getElementById('password').addEventListener('focus',()=>{
        l.animate(100).move(50, 110)
        r.animate(100).move(150, 110)
        document.getElementById('emailaddress').setAttribute("type", "email");
    })
 }
</script>
 --}}
