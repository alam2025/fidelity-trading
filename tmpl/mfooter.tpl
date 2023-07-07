</div>

                    <p class="copyright">© 2023 {$settings.site_name}. All rights reserved.</p>
            </div>
        </div>
    </div>

	 {literal}<script>
            $('#balance').hide();
            $('#infodata').hide();
            $.ajax({
                url: "?a=account",
                context: document.body
            }).done(function(data) {
                $('#balance').html($(data).find('#balance').html()).show();
                $('#infodata').html($(data).find('#infodata').html()).show();
            });
        </script>
		{/literal}
    </body>
</html>