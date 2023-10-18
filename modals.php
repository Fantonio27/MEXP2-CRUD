<?php
    include './crud/update.php';
    include './crud/create.php';
    include './crud/delete.php';
?>

<!-- Modal For Create and Edit Form -->
<div class="modal fade " id="editmodal" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="position:relative">
                <div class="modal-header-title">
                    <img src="" class="add-icon">
                    <div style="display:flex;flex-direction:column">
                        <p class="modal-title"></p>
                        <p class="modal-p1"></p>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="row g-3">
                    <input type="hidden" class="id" name="id" />
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="input-form" name="name" placeholder="Input your name" maxlength="36"
                            pattern="[a-zA-Z\s]*$" title="Letters Only" required />
                    </div>
                    <div class="col-12">
                        <label for="name" class="form-label">Email</label>
                        <input type="email" class="input-form" name="email" placeholder="Input your email"
                            pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Invalid Email Address"
                            maxlength="40" required>
                    </div>
                    <div class="col-12">
                        <label for="short" class="form-label">Password</label>
                        <div style="position:relative">
                            <img src="./resources/icons/show-icon.png" class="password-icon" onclick="Password()">
                            <input type="password" class="input-form" name="password" id="password"
                                placeholder="Input your password" maxlength="40"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Must contain at least one number, uppercase and lowercase letter, and at least 8 or more characters"
                                required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="input-form" id="address" name="address" rows="3" maxlength="120"
                            oninput="LengthAddress()" required></textarea>
                        <div class="no">
                            <p id="no">0</p>/120
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input type="button" class="close-btn" onclick="Clear()" data-bs-dismiss="modal" value="Cancel"/>
                    </div>
                    <div class="col-md-6"><input type="submit" id="submitbtn" name="" class="form-create-submit-btn"
                            value="Create" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal For Delete Form -->
<div class="modal fade " data-bs-backdrop="static" id="deletemodal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h1 class="form-delete-h1">Are you sure you wanna delete this?</h1>
                <p class="form-delete-p1">This change will reflect in your portal immediatly.</p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-delete-btn-group">
                        <input type="hidden" class="id" name="id" />
                        <button type="button" class="form-delete-cancel-btn"
                            data-bs-dismiss="modal">Cancel</button>
                        <input type="submit" name="delete" class="form-delete-submit-btn" value="Confirm"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>