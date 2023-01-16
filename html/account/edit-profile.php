<?php include '../includes/header.html'; ?>
        <!-- Main -->
        <main>
            <!-- Section -->
            <section class="py-5 py-lg-8 border-bottom border-gray-100">
                <div class="container">
                    <div class="text-center">
                        <h1 class="m-0">Edit profile</h1>
                    </div>
                </div>
            </section>
            <!-- End Section -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col col-lg-3 col-xl-2 text-center">
                            <div class="avatar-xxl px-avatar-upload mb-3 mx-auto overflow-hidden">
                                <input type='file' id="px_image_Upload" accept=".png, .jpg, .jpeg" />
                                <label class="avatar-preview" for="px_image_Upload">
                                    <span id="px_image_Preview" class="rounded-circle overflow-hidden avatar-preview-bg" style="background-image: url(../../assets/img/avatar-1.jpg);">
                                    </span>
                                    <i class="bi bi-pencil icon-sm position-absolute bg-primary z-index-1 mb-2 bottom-0 end-0 text-white rounded-circle border border-2 border-white"></i>
                                </label>
                            </div>
                            <span class="lh-2">We recommend an image of at least 300x300. Gifs work too.</span>
                        </div>
                        <div class="col-md-9 col-xl-10 mt-5 mt-md-0">
                            <form>
                                <div class="py-3">
                                    <h6>Display name</h6>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your display name">
                                </div>
                                <div class="py-3">
                                    <h6>Custom URL</h6>
                                    <input type="text" name="url" class="form-control" placeholder="Enter your custom URL'">
                                </div>
                                <div class="py-3">
                                    <h6>Bio</h6>
                                    <textarea class="form-control" rows="5" placeholder="Tell about yourself in a few words"></textarea>
                                </div>
                                <div class="py-3">
                                    <h6>Twitter Username</h6>
                                    <input type="text" name="username" class="form-control" placeholder="Twitter Username">
                                </div>
                                <div class="py-3">
                                    <h6>Personal site or portfolio</h6>
                                    <input type="text" name="portfolio" class="form-control" placeholder="Your Website">
                                </div>
                                <div class="py-3">
                                    <h6>Email</h6>
                                    <input type="email" name="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="py-3">
                                    <button class="w-100 btn btn-primary">Update profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
        </main>
        <!-- End Main -->
        <?php include '../includes/footer.html'; ?>