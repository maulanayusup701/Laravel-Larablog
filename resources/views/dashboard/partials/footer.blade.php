</div>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });
    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })

    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
</body>

</html>
