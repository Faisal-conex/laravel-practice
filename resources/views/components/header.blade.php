<div>
    <header>
        <nav
            style="display: flex; justify-content: space-between; background-color : rgb(100, 100, 201); padding : 3rem; margin-bottom : 3rem">
            <h1>Header Component</h1>
            <div class="anchor-container">
                <a href="/">Home</a>
                <a href="/create-post">Post</a>
                <a href="profile">Profile</a>
                <a href="about">About</a>
                <a href="contact">Contact</a>
            </div>
        </nav>
    </header>
</div>


<style>
    
    .anchor-container{
        display: flex;
        gap:1rem;
    }
    
    a{
    
        color : rgb(0,0,0);
        text-decoration : none;
    }
    a:hover{
        color:white;
    }
</style>