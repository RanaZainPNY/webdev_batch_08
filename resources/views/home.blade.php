<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <span>User Name: {{ $user_data->name }}</span>
        <br>
        <span>User Email: {{ $user_data->email }}</span>
    </div>
    <h1>This is my Home Page</h1>
    <h2><?php echo 'Hello Echo'; ?></h2>

    <a href="{{ route('products') }}">Go to Products Page</a>
    @php
        $age = 33;
        $name = 'M. Umer';
        $admin_login = false;
        $fruits = ['mango', 'orange', 'bnanana'];
    @endphp
    <hr>

    <h2>Blade Syntax for iteration</h2>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

    <h2>Core Php Syntax for iteration</h2>
    <ul>
        <?php
        $fruits = ['mango', 'orange', 'bnanana'];
        foreach ($fruits as $fruit) {
            echo "<li>$fruit </li>";
        }
        ?>
    </ul>

    <hr>
    <h2>{{ 'Hello Echo from Blade' }}</h2>

    <hr>

    <ul>
        <li>{{ $age }}</li>
        <li>{{ $name }}</li>
    </ul>

    <ul>
        @if ($admin_login)
            <li>You are logged in as Admin</li>
        @else
            <li>You are logged in as Guest</li>
        @endif
    </ul>




    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum modi mollitia aspernatur adipisci vel
        temporibus possimus quos ipsum, dolor accusantium omnis nulla repellat magni. Cumque optio aperiam nisi cum,
        voluptatibus obcaecati amet commodi voluptatum animi rem consequuntur soluta, quia distinctio! Sequi
        voluptatibus nulla eveniet veniam animi sunt ducimus esse eligendi odio ipsa ratione soluta quia ab cum in
        corrupti dicta voluptate facere voluptates laboriosam, aliquam placeat, impedit beatae necessitatibus!
        Accusantium necessitatibus, illum aut aperiam non soluta. Dolorem, temporibus maxime officiis quam quas magnam
        distinctio blanditiis, eligendi natus veritatis voluptatem ea praesentium id pariatur dolores ratione totam!
        Rerum in dignissimos veritatis tenetur impedit suscipit voluptatum eum, explicabo cumque eius! Nam nihil animi
        est adipisci impedit? Provident, sapiente totam nisi ea, vitae obcaecati sunt suscipit odio dolor dolorum illo
        voluptatem, esse exercitationem nobis illum fuga officia quia amet numquam. Eveniet quas dolores aut deleniti
        quisquam reiciendis, dolor sit iste eos magni? Earum, ullam? Quidem deserunt suscipit, ipsam quod ea aliquid
        quia ipsa dolorum aspernatur. Maxime molestias impedit illum. Quae in nam praesentium dicta incidunt similique
        iusto quis, culpa deserunt temporibus numquam, expedita nulla hic debitis delectus quas explicabo sunt! Delectus
        error deserunt repellendus quasi minima ex molestiae? Id ab libero quo voluptatibus possimus, hic magni vitae
        cumque at. At, distinctio aut. Perferendis distinctio praesentium voluptatem ipsum nisi, obcaecati perspiciatis,
        dolores laudantium beatae eos aspernatur nulla incidunt dolore officiis modi atque sed labore! Dicta doloribus
        consectetur expedita, possimus similique nemo quam nihil sequi omnis harum tempore dolorum ratione labore totam
        voluptas error sint! Corporis voluptatibus, inventore temporibus provident aliquid placeat aliquam, cum id harum
        quia officiis repellat magnam vitae et nobis iure blanditiis esse quod maiores debitis nostrum mollitia.
        Consequatur consequuntur nobis, ullam, sequi hic officia aperiam molestiae quo, ratione eveniet minus vero
        neque. Ipsa ducimus nesciunt dolorum expedita exercitationem, quo voluptates culpa voluptate cum dolorem
        repudiandae veritatis eius iusto? Explicabo aperiam mollitia enim iste fuga esse animi possimus facere veniam
        maxime error ipsum reiciendis ad, doloribus incidunt veritatis sit? Itaque rem, exercitationem possimus culpa
        animi enim totam similique excepturi officia corrupti aliquid quam fugit repudiandae tenetur dolorum, omnis
        voluptates est. Porro, veniam eum? Nostrum voluptate harum repellat porro fugiat nobis est. Nemo animi iste
        quaerat, esse autem praesentium sapiente beatae, perspiciatis, culpa incidunt necessitatibus porro? Temporibus
        accusamus assumenda adipisci, asperiores pariatur alias illo, tempora facilis, repellendus saepe natus sint
        voluptatum rem veritatis neque quod ad quaerat quidem eos id? Sit, cupiditate sequi quod, repellendus laboriosam
        minus quia beatae reprehenderit quam fugit eum ipsam tempora excepturi temporibus magnam iure officia soluta?
        Mollitia explicabo maiores omnis suscipit in tempore vitae magnam corporis consectetur aut. Deleniti reiciendis
        ab sint sapiente, molestiae consectetur culpa suscipit recusandae qui rerum quis placeat possimus saepe
        obcaecati minus nihil officia! Repellendus similique consectetur quo, amet debitis error delectus adipisci in
        beatae ad distinctio reiciendis voluptas autem dolor consequuntur. Adipisci, rerum? Fugit quo veritatis
        voluptas, iusto reiciendis quam ratione obcaecati at repudiandae velit libero repellat rem accusamus error
        adipisci dolorum provident sunt non explicabo blanditiis asperiores, sint beatae repellendus veniam? Ipsam
        dicta, blanditiis maxime, molestiae, saepe quam voluptates repellat tempora repellendus vero aut nemo explicabo
        excepturi adipisci nostrum eaque beatae sunt? Voluptas ad delectus dolor quibusdam a sapiente odio corrupti
        tempora doloribus, vero deserunt rerum, explicabo cum voluptate illum necessitatibus quae, ratione facilis. A
        fuga quae veniam eveniet. Dolore eligendi, porro optio quod aliquid vero suscipit deserunt labore possimus vel
        incidunt ipsa asperiores quam alias id a, error velit eum earum voluptate iure illum perspiciatis in? Asperiores
        at assumenda quasi sint beatae, quod rerum illo iure nihil architecto quibusdam error nostrum explicabo quo iste
        expedita quaerat ab est? Quae officiis error tenetur maxime quia deserunt commodi fuga laborum laudantium est
        magnam sunt voluptates quod illo, debitis iure similique odit omnis rem velit fugiat! Atque numquam earum
        expedita dolores a harum libero, corporis quasi dolorum esse molestias sunt, rem quod, id sint provident sequi!
        Nulla aliquam deserunt, enim iste animi, illo vitae non adipisci quasi corrupti nam nobis corporis quis itaque
        voluptate facere dolores ex vel veniam ad rem. Rem labore hic sit, ab est dicta consequuntur? Assumenda sapiente
        quibusdam debitis mollitia ex! Nihil deserunt quibusdam architecto ut doloremque, voluptatibus qui fugit
        molestias odio velit, error sint repellendus voluptatum reiciendis facilis magnam corporis deleniti inventore
        vero, nisi sunt? Fuga ratione exercitationem deleniti aut praesentium sed explicabo dolor iure, molestias
        dignissimos dolores soluta velit eum at in quisquam illo delectus incidunt quasi. Ullam incidunt soluta aliquam
        fugiat dolor quas a corrupti, iure, qui quos autem. Magni reiciendis autem reprehenderit nam, dolorem, fugit
        aperiam totam ex pariatur ab eum quibusdam blanditiis excepturi est libero id minima dolorum debitis! Sequi
        deserunt doloribus perferendis expedita modi ipsa tempora autem, optio, placeat, adipisci aut accusantium quod
        repellendus explicabo doloremque veritatis magnam nemo repellat et corrupti animi sunt incidunt dolor! Eius eos
        aspernatur, inventore quia nisi a magni dolor nostrum fugiat similique ad incidunt tempora non aliquam! Placeat
        sed nam doloremque neque illum itaque molestias perferendis, necessitatibus impedit quasi, soluta magni
        quibusdam temporibus iure debitis provident fugit natus ab aspernatur facilis vero! Adipisci facere incidunt
        velit pariatur ex nihil, corporis sequi reprehenderit labore, iusto animi, aperiam laborum cum illo. Architecto
        iusto consequatur aperiam expedita pariatur dignissimos vitae, doloribus nemo rem veniam, adipisci aliquam?
        Doloremque recusandae nesciunt quidem temporibus ducimus itaque et similique eaque incidunt!</p>

</body>

</html>
