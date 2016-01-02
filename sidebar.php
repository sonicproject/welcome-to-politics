
      <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <hr/>
                  <h2 class="sidebarH2">Topics</h2>
              <li ng-repeat="category in categories">
                  <a class="btn-lg btn-block"
                 href="#">{{category.name}}</a>
              </li>
              <hr/>
              <li id="sidemenu">
                 <button type="button" class="btn btn-primary btn-block">Post a Question
                 </button>
             </li>
        </ul> 	<!-- /class=sidebar-nav -->
      </div>		<!-- /#sidebar-wrapper -->
