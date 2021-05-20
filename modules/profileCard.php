<div class="card d-flex align-items-center shadow p-3 mb-5 bg-white rounded">
    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle my-2"
        viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
        <path fill-rule="evenodd"
            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
    </svg>
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_SESSION['username']; ?>
        </h5>
        
        <div class="d-flex justify-content-center">
            <button class="btn bd-search-docs-toggle d-md-none p-0 ml-3 collapsed" type="button" data-toggle="collapse"
                data-target="#bd-docs-nav" aria-controls="bd-docs-nav" aria-expanded="false"
                aria-label="Toggle docs navigation"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                    viewBox="0 0 30 30" role="img" focusable="false">
                    <title>Menu</title>
                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"
                        d="M4 7h22M4 15h22M4 23h22"></path>
                </svg></button>
        </div>
    </div>
</div>