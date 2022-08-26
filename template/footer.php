        </div>
    </div>
</section>

<script src="<?php echo $url ?>assets/js/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
<script src="<?php echo $url ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo $url;?>assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url;?>assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="<?php echo $url ?>assets/js/app.js"></script>

<script>
    
    let currentPage = location.href;
    $(".menu-item-link").each(function(){
        let link = $(this).attr("href");
        if(currentPage == links){
            $(this).addClass('active');
        }
    });

</script>
</body>

</html>