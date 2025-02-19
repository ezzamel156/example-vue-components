
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>
  
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        
        <carousel-dropdown></carousel-dropdown>

        <a href="/lodash-example" class="navbar-item">
          Lodash Example
        </a>

        <a href="/portal-example" class="navbar-item">
            Portal Vue
        </a>

        <a href="/accordian-example" class="navbar-item">
          Accordian
      </a>
        
      </div>
  
      {{-- <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div> --}}
    </div>
  </nav>

  <portal-target name="nav-after"></portal-target>
  