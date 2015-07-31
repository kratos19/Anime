<?php 

    require("../functions/connect.php");

    $interogare="SELECT * FROM `anime`";
    $result=$db->query($interogare);
    $rezultate=$result->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($rezultate); die();


    // Stergerea elementelor din tabela anime 
    if(isset($_GET['delete']) && is_numeric($_GET['delete']) ){
        $element_de_sters=$_GET['delete'];
        $interogare=" DELETE FROM `anime` WHERE id=$element_de_sters";
        $db->query($interogare);
    }

    // Adaugarea elementelor in tabela anime
    if( isset($_POST['save']) && $_POST['save']='1234' )
    {
        $titlu=isset($_POST['titlu']) ? $_POST['titlu'] : '';
        $imagine=isset($_POST['imagine']) ? $_POST['imagine'] : '';
        $continut=isset($_POST['continut']) ? htmlentities($_POST['continut']) : "";

        if($titlu=="" || $imagine=="" || $continut == "") {
            die('Te rog sa completezi intregul formular');
        }
        else
        {

            $interogare="INSERT INTO `anime` (`titlu`, `imagine`, `continut`)
                         VALUES('$titlu','$imagine', '$continut')";
            $db->query($interogare);
            header("Location: ".$_SERVER['REQUEST_URI']);
        }
    }
?>          

<html>
<head>
    <meta charset="UTF-8">
    <title>Administrare Pagini</title>
</head>
<body>
    <div class='wrapper'>
        <div id="contact-form">
            <h1>
                <i class="fa fa-lock"></i>
                <span> Management anime-uri !</span>
            </h1>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td>
                            <div id="form-text">
                                <i class="fa fa-angle-double-right"></i> Titlu
                            </div>
                            <input type="text" name="titlu" value="<?php echo isset($filForm['titlu'])? $filForm['titlu']:''; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="form-text">
                                <i class="fa fa-angle-double-right"></i></i> Imagine
                            </div>
                            <input type="text" name="imagine" value="<?php echo isset($filForm['imagine'])? $filForm['imagine']:''; ?>" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="form-text">
                                <i class="fa fa-angle-double-right"></i></i> Continut Pagina
                            </div>
                            <textarea name="continut" cols="40" rows="20" ><?php echo isset($filForm['continut'])? $filForm['continut']:''; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="testing"><input  type="submit" value="Salveaza" /></div>
                            <input type="hidden" name="save" value="1234" />
                            <input  type="hidden" name="id" value="<?php echo isset($_GET['edit']) && is_numeric($_GET['edit'])? $_GET['edit']:0; ?>" />
                        </td>
                    </tr>
                </table>
            </form>
            <table>
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Titlu
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($rezultate as $info): ?> 
                        <tr>
                            <td>
                                <?php echo $info['id']; ?> 
                            </td>
                            <td>
                                <?php echo $info['titlu'];?>
                            </td>
                            <td>
                                <a href="<?php echo $_SERVER['PHP_SELF'], '?edit=', $info['id']; ?>">Editeaza</a>    
                                <a href="<?php echo $_SERVER['PHP_SELF'], '?delete=',$info['id']; ?>">Sterge</a> 
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>