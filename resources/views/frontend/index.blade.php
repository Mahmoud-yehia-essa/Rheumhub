<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="{{asset('adminbackend/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet')}}" />
    <link href="{{asset('adminbackend/assets/plugins/input-tags/css/tagsinput.css" rel="stylesheet')}}" />
    <link
      href="{{asset('adminbackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}"
      rel="stylesheet"
    />
    <link
      href="{{asset('adminbackend/assets/plugins/metismenu/css/metisMenu.min.css')}}"
      rel="stylesheet"
    />


    <!-- loader-->
    <link href="{{asset('adminbackend/assets/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('adminbackend/assets/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('adminbackend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('adminbackend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link href="{{asset('adminbackend/assets/css/app.css')}}" rel="stylesheet" />
    <link href="{{asset('adminbackend/assets/css/icons.css')}}" rel="stylesheet" />




    

    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('adminbackend/assets/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('adminbackend/assets/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('adminbackend/assets/css/header-colors.css')}}" />



    


  </head>
  <body>
    <div class="page-wrapper mt-0">
      <div class="page-content">
        <div class="row">
          <div class="col-xl-9">
            <h6 class="mb-0 text-uppercase">APPLICANT INFORMATION From Git</h6>
            <hr />
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <label class="form-label">Name:</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Position:</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Work Address:</label>
                    <input type="text" class="form-control" placeholder="" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email:</label>
                    <input
                      type="email"
                      class="form-control"
                      placeholder="example@gmail.com"
                    />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Contact number:</label>
                    <input type="text" class="form-control" />
                  </div>
                </form>
              </div>
            </div>

            <h6 class="mb-0 text-uppercase">PROJECT INFORMATION</h6>
            <hr />
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="mb-3">
                    <label class="form-label">Title:</label>
                    <input type="text" class="form-control" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Project Leader(s):</label>
                    <input type="text" class="form-control" />
                  </div>

                  <div class="row gy-1 mb-3">
                    <label class="form-label">Project Members:</label>

                    <div class="col-md-9">
                      <input
                        id="todo-input"
                        type="text"
                        class="form-control"
                        value=""
                      />
                    </div>
                    <div class="col-md-3 text-end d-grid">
                      <button
                        type="button"
                        onclick="CreateTodo();"
                        class="btn btn-primary"
                      >
                        Add Member
                      </button>
                    </div>
                  </div>

                  <div class="form-row mt-3">
                    <div class="col-12">
                      <div id="todo-container"></div>
                    </div>
                  </div>

                  <div class="row gy-1">
                    <label class="form-label">Objectives:</label>

                    <div class="col-md-9">
                      <input
                        id="todo-input2"
                        type="text"
                        class="form-control"
                        value=""
                      />
                    </div>
                    <div class="col-md-3 text-end d-grid">
                      <button
                        type="button"
                        onclick="CreateTodo2();"
                        class="btn btn-primary"
                      >
                        Add objective
                      </button>
                    </div>
                  </div>

                  <div class="form-row mt-3">
                    <div class="col-12">
                      <div id="todo-container2"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Description:</label>
                    <textarea
                      class="form-control"
                      id="text"
                      name="text"
                      maxlength="500"
                      placeholder="Type in your message"
                      rows="5"
                    ></textarea>
                    <span
                      class="pull-right label label-default"
                      id="count_message"
                    ></span>
                  </div>
                </form>
              </div>
            </div>

            <div id="repeater">
              <!-- Repeater Heading -->

              <div class="card">
                <div class="card-body">
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <h5 class="mb-0">Project organization</h5>
                    <button class="btn btn-primary repeater-add-btn px-4">
                      Add
                    </button>
                  </div>
                </div>
              </div>

              <div class="items" data-group="test">
                <div class="card">
                  <div class="card-body">
                    <!-- Repeater Content -->
                    <div class="item-content">
                      <div class="mb-3">
                        <label for="inputName3" class="form-label">Start</label>
                        <input
                          type="date"
                          class="form-control"
                          id="inputName3"
                          placeholder="Name"
                          data-name="name"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="inputEmail3" class="form-label">End</label>
                        <input
                          type="date"
                          class="form-control"
                          id="inputEmail3"
                          placeholder="Email"
                          data-skip-name="true"
                          data-name="email"
                        />
                      </div>
                      <div class="mb-3">
                        <label for="inputEmail3" class="form-label"
                          >Description</label
                        >
                        <textarea class="form-control" rows="5"></textarea>
                      </div>
                    </div>
                    <!-- Repeater Remove Btn -->
                    <div class="repeater-remove-btn">
                      <button class="btn btn-danger remove-btn px-4">
                        Remove
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <h6 class="mb-0 text-uppercase"></h6>
            <hr />
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row gy-1 mb-3">
                    <label class="form-label">Targeted Journal:</label>

                    <div class="col-md-9">
                      <input
                        id="todo-input3"
                        type="text"
                        class="form-control"
                        value=""
                      />
                    </div>
                    <div class="col-md-3 text-end d-grid">
                      <button
                        type="button"
                        onclick="CreateTodo3();"
                        class="btn btn-primary"
                      >
                        Add Journal
                      </button>
                    </div>
                  </div>

                  <div class="form-row mt-3">
                    <div class="col-12">
                      <div id="todo-container3"></div>
                    </div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Grant Type :</label>

                    <div class="form-check mb-4">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="flexRadioDefault"
                        id="flexRadioDefault1"
                      />
                      <label class="form-check-label" for="flexRadioDefault1">
                        Full grant (full funding, registry data access, resource
                        allocation including medical writer and statistician)
                      </label>
                    </div>

                    <div class="form-check form-check-success">
                      <div class="row">
                        <div class="col-sm-3">
                          <input
                            class="form-check-input"
                            type="radio"
                            name="flexRadioDefault"
                            id="flexRadioSuccess"
                          />
                          <label
                            class="form-check-label"
                            for="flexRadioSuccess"
                          >
                            Partial Grant
                          </label>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckDefault"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckDefault"
                            >
                              Electronic Survey Creation
                            </label>
                          </div>

                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckChecked"
                            >
                              Statistical analysis
                            </label>
                          </div>

                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckChecked"
                            >
                              Medical writer
                            </label>
                          </div>

                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckChecked"
                            >
                              Article process charges (APCs)
                            </label>
                          </div>

                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckChecked"
                            >
                              Access to registry data only
                            </label>
                          </div>

                          <div class="form-check">
                            <input
                              class="form-check-input"
                              type="checkbox"
                              value=""
                              id="flexCheckChecked"
                            />
                            <label
                              class="form-check-label"
                              for="flexCheckChecked"
                            >
                              Others, Specify:
                            </label>
                          </div>

                          <input type="text" class="form-control" />
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->
      </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('adminbackend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{ asset('adminbackend/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{ asset('adminbackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <!--app JS-->
    <script src="{{ asset('adminbackend/assets/js/app.js')}}"></script>
    <script>
      // to do list

      var todos = [];
      var currentTodo = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input").oninput = function (e) {
        currentTodo.text = e.target.value;
      };
      /*
			//jQuery Version
			$('#todo-input').on('input',function(e){
				currentTodo.text = e.target.value;
			   });
			*/
      function DrawTodo(todo) {
        document.getElementById("todo-input").value = "";

        var newTodoHTML = `
			<div class="pb-3 todo-item" todo-id="${todo.id}">
				<div class="input-group">
					
					
					
					<input type="text" readonly class="form-control ${
            todo.done && " todo-done "
          } " aria-label="Text input with checkbox" value="${todo.text}">
					
						<button todo-id="${
              todo.id
            }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo(this);" id="button-addon2 ">X</button>
					
				</div>
			</div>
			  `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML;
        document
          .getElementById("todo-container")
          .appendChild(dummy.children[0]);
        /*
				//jQuery version
				 var newTodo = $.parseHTML(newTodoHTML);
				 $("#todo-container").append(newTodo);
				*/
      }

      function RenderAllTodos() {
        var container = document.getElementById("todo-container");
        while (container.firstChild) {
          container.removeChild(container.firstChild);
        }
        /*
				//jQuery version
				  $("todo-container").empty();
				*/
        for (var i = 0; i < todos.length; i++) {
          DrawTodo(todos[i]);
        }
      }
      RenderAllTodos();

      function DeleteTodo(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
				//jQuery version
				  var deleteID = parseInt($(button).attr("todo-id"));
				*/
        for (let i = 0; i < todos.length; i++) {
          if (todos[i].id === deleteID) {
            todos.splice(i, 1);
            RenderAllTodos();
            break;
          }
        }
      }

      function TodoChecked(id) {
        todos[id].done = !todos[id].done;
        RenderAllTodos();
      }

      function CreateTodo() {
        newtodo = {
          text: currentTodo.text,
          done: false,
          id: todos.length,
        };
        todos.push(newtodo);
        RenderAllTodos();
      }

      var text_max = 500;
      $("#count_message").html("0 / " + text_max);

      $("#text").keyup(function () {
        var text_length = $("#text").val().length;
        var text_remaining = text_max - text_length;

        $("#count_message").html(text_length + " / " + text_max);
      });
    </script>

    <script src="{{ asset('adminbackend/assets/plugins/form-repeater/repeater.js')}}"></script>
    <script>
      /* Create Repeater */
      $("#repeater").createRepeater({
        showFirstItemToDefault: true,
      });
    </script>

    <script>
      var todos2 = [];
      var currentTodo2 = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input2").oninput = function (e) {
        currentTodo2.text = e.target.value;
      };
      /*
			//jQuery Version
			$('#todo-input').on('input',function(e){
				currentTodo.text = e.target.value;
			   });
			*/
      function DrawTodo2(todo) {
        document.getElementById("todo-input2").value = "";

        var newTodoHTML2 = `
			<div class="pb-3 todo-item" todo-id="${todo.id}">
				<div class="input-group">
					
					
					
					<input type="text" readonly class="form-control ${
            todo.done && " todo-done "
          } " aria-label="Text input with checkbox" value="${todo.text}">
					
						<button todo-id="${
              todo.id
            }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo2(this);" id="button-addon2 ">X</button>
					
				</div>
			</div>
			  `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML2;
        document
          .getElementById("todo-container2")
          .appendChild(dummy.children[0]);
        /*
				//jQuery version
				 var newTodo = $.parseHTML(newTodoHTML);
				 $("#todo-container").append(newTodo);
				*/
      }

      function RenderAllTodos2() {
        var container2 = document.getElementById("todo-container2");
        while (container2.firstChild) {
          container2.removeChild(container2.firstChild);
        }
        /*
				//jQuery version
				  $("todo-container").empty();
				*/
        for (var i = 0; i < todos2.length; i++) {
          DrawTodo2(todos2[i]);
        }
      }
      RenderAllTodos2();

      function DeleteTodo2(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
				//jQuery version
				  var deleteID = parseInt($(button).attr("todo-id"));
				*/
        for (let i = 0; i < todos2.length; i++) {
          if (todos2[i].id === deleteID) {
            todos2.splice(i, 1);
            RenderAllTodos2();
            break;
          }
        }
      }

      function TodoChecked2(id) {
        todos2[id].done = !todos2[id].done;
        RenderAllTodos2();
      }

      function CreateTodo2() {
        newtodo = {
          text: currentTodo2.text,
          done: false,
          id: todos2.length,
        };
        todos2.push(newtodo);
        RenderAllTodos2();
      }
    </script>

    <script>
      var todos3 = [];
      var currentTodo3 = {
        text: "",
        done: false,
        id: 0,
      };
      document.getElementById("todo-input3").oninput = function (e) {
        currentTodo3.text = e.target.value;
      };
      /*
  //jQuery Version
  $('#todo-input').on('input',function(e){
    currentTodo.text = e.target.value;
     });
  */
      function DrawTodo3(todo) {
        document.getElementById("todo-input3").value = "";

        var newTodoHTML3 = `
  <div class="pb-3 todo-item" todo-id="${todo.id}">
    <div class="input-group">
      
      
      
      <input type="text" readonly class="form-control ${
        todo.done && " todo-done "
      } " aria-label="Text input with checkbox" value="${todo.text}">
      
        <button todo-id="${
          todo.id
        }" class="btn btn-outline-secondary bg-danger text-white" type="button" onclick="DeleteTodo3(this);" id="button-addon2 ">X</button>
      
    </div>
  </div>
    `;
        var dummy = document.createElement("DIV");
        dummy.innerHTML = newTodoHTML3;
        document
          .getElementById("todo-container3")
          .appendChild(dummy.children[0]);
        /*
    //jQuery version
     var newTodo = $.parseHTML(newTodoHTML);
     $("#todo-container").append(newTodo);
    */
      }

      function RenderAllTodos3() {
        var container3 = document.getElementById("todo-container3");
        while (container3.firstChild) {
          container3.removeChild(container3.firstChild);
        }
        /*
    //jQuery version
      $("todo-container").empty();
    */
        for (var i = 0; i < todos3.length; i++) {
          DrawTodo3(todos3[i]);
        }
      }
      RenderAllTodos3();

      function DeleteTodo3(button) {
        var deleteID = parseInt(button.getAttribute("todo-id"));
        /*
    //jQuery version
      var deleteID = parseInt($(button).attr("todo-id"));
    */
        for (let i = 0; i < todos3.length; i++) {
          if (todos3[i].id === deleteID) {
            todos3.splice(i, 1);
            RenderAllTodos3();
            break;
          }
        }
      }

      function TodoChecked3(id) {
        todos3[id].done = !todos2[id].done;
        RenderAllTodos3();
      }

      function CreateTodo3() {
        newtodo = {
          text: currentTodo3.text,
          done: false,
          id: todos3.length,
        };
        todos3.push(newtodo);
        RenderAllTodos3();
      }
    </script>
  </body>
</html>
