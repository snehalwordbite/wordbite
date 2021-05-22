<main role="main" class="col-md-9 col-xl-8 py-md-3  bd-content shadow mb-2 bg-white rounded navbar-nav-scroll">
    <!-- here put the foreach loop to make this working -->

    <div class="card text-center border-0">
        <div class="card-body">
            <h5 class="card-title">Posts</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil molestias voluptatibus
                voluptatem nemo fugit voluptate officia aliquid nesciunt doloribus id dicta aliquam facilis beatae ex
                ducimus nostrum, dolorem consequuntur ipsum.</p>
        </div>
        <div class="card-footer bg-transparent text-muted border-top-0 border-left-0 border-right-0 border-bottom">
            <div class="row">
                <div class="d-flex flex-row mr-auto justitfy-content-start">
                    <div class="user-img text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                    </div>
                    <a href="#" class="link mx-2 text-center">@<?php echo $_SESSION['username']; ?></a>
                    <button type="button" class="btn btn-outline-info btn-sm rounded-pill px-4">follow</button>
                </div>
                <div class="d-flex flex-row justitfy-content-start">
                    <button type="button" class="btn">&#128151</button>

                </div>
            </div>
        </div>
        <span class="border broder-dark border-top-0 border-left-0 border-right-0"></span>
    </div>

</main>