<x-master>
    <div class="min-vh-100">
        <div class="login">
            <h1>LOGIN</h1>
            <div class="links">
                <a href="index.php" class="active">Login</a>
            </div>
            <form action="login" method="POST">
                @csrf
                <label for="email">
                    <i class="fas fa-user"></i>
                </label>
                <input type="email" name="email" placeholder="Email" id="email" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <div class="msg"></div>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</x-master>
