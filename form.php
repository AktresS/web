     <!--Форма-->
    <div id="popup" class="popup">
        <a href="#header" class="popup__area"></a>
        <div class="popup__body">
            <div class="popup__content">
                <a href="#header" class="popup__close">X</a>
                <a href="#header" class="popup__logo">
                    <img src="img/logo.svg" alt="" class="logo">
                    ProКино
                </a>
                <div id="popup__form" class="popup__form">
                    <form method="POST" enctype="multipart/form-data" action="process.php">
                        <div class="inputs">
                            <div class="input-box">
                                <input type="text" placeholder="Name" name="username" value="<? if(isset($_COOKIE['username'])) echo($_COOKIE['username']) ?>" required>
                            </div>
                            <div class="input-box">
                                <input type="email" placeholder="Email"  name="email" value="<? if(isset($_COOKIE['email'])) echo($_COOKIE['email']) ?>" required>
                            </div>
                            <div class="input-box">
                                <input type="password" placeholder="Password" name="password" required>
                            </div>
                        </div>
                        <select name="gender" class="select-box" required>
                                <option value="" disabled selected>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                        </select>
                        <div class="photo-box">
                            <label for="profile_image">Profile Image</label>
                            <input type="file" name="profile_image">
                        </div>
                        <div class="checkbox__remember">
                            <div class="check-box" ><input id="check-remember" type="checkbox" name="checkbox"></div>
                            <div class="remember"> 
                                <label for="check-remember">Remember me</label>
                            </div>
                        </div>
                        
                        <input class="form__btn" type="submit" value="Register">
                    </form>
                </div>
            </div>  
        </div> 
    </div>