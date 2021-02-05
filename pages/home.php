<div class="container">
    <div class="row min-vh-100 justify-content-center align-content-center text-center">
        <div class="col-8">
            <h1 class="text-thin text-loose">Orange</h1>
            <hr>
            <h2 class="h6 text-muted text-thin">Lightweight PHP Framework</h2>

            <ul class="text-start bg-light py-4 mt-4 list-unstyled ps-4" style='line-height: 1; border-left: 6px solid var(--bs-gray); font-family: var(--bs-font-monospace)'>
                <h4>What's New?</h4>
                <li>Introduced GuzzleHTTP to handle http requests</li>
                <li>Bootstrap 5 included</li>
            </ul>

            <div class="text-start my-5 bg-light p-4" id="weather">
                <h4 class="">API Sample Response</h4>
                <div class="api-response"></div>
            </div>
        </div>
    </div>
</div>
<script>
    ajaxDirect('weather',{
        q:'Colombo,LK',
        appid:"xxxxx"
    },'No','get');
</script>
