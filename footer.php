





<script src="includes/bootstrap.bundle.min.js"></script>
<script>
                $("#check").submit(function(event){
                event.preventDefault(); // Prevent normal form submission

                $.ajax({
                    url: "checker.php", 
                    type: "POST",
                    data: $(this).serialize(), // Serialize form data
                    success: function(response){
                        if(response.trim() === "ok"){
                            $("#msg").html("<span style='color: green;'>Valid Ticket</span>");
                            location.reload(); // Reload the page on success
                        } else {
                            $("#msg").html("<span style='color: red;'>" + response + "</span>");
                        }
                    }
                });
            });

</script>
</body>
</html>