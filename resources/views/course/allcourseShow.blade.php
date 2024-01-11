<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyBhai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />


    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        form {
            display: flex;
            justify-content: center;
        }

        input {
            margin-right: 0.5rem;
        }

        .card-group {
            display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); /* Adjust as needed */
    column-gap: 20px;

  }
    </style>
</head>

<body>
    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <x-user.navbar></x-user.navbar>

    <!-- ------------------------------------------------- navbar ------------------------------------------------- -->

    <!-- ------------------------------------------------- team section -------------------------------------------------  -->

    <br /><br /><br />


    <div class="card-group">

        @foreach ($courses as $course)
        <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"> {{ $course->title }}</h5>
            <p class="card-text">{{ $course->price }} BDT</p>
            <p class="card-text">{{ $course->duration }}</p>

            <a href="{{ route('single_course_info', $course->id) }}"
                class="view_learning_anchor">
                <button type="button" class="btn btn-info">View</button>
            </a>
          </div>
        </div>


        </div>
        @endforeach
      </div>









    <!-- ------------------------------------------------- team section -------------------------------------------------  -->


    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <x-user.footer></x-user.footer>

    <!-- ------------------------------------------------- footer -seventh section ------------------------------------------------- -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
