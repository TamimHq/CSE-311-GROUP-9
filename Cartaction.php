<?php session_start();

$action_type = $_GET['action_type'];
if($action_type=='add_item')
{
	$Id = $_GET['ID'];
	$Product_name = $_GET['products'];
	$q = $_GET['quantity'];
	$Price = $_GET['Price'];

	$product_arr = array(
		'ID'=>$Id,
		'products'=>$Product_name,
		'quantity'=>$q,
		'Price'=>$Price,
	);

	if(!empty($_SESSION['cart']))
	{
		$product_is = array_column($_SESSION['cart'], 'ID');
		if(in_array($Id, $product_is))
		{
			foreach($_SESSION['cart'] as $key => $val)
			{
				if($_SESSION['cart'][$key]['ID']==$Id)
				{
					$_SESSION['cart'][$key]['quantity'] = $_SESSION['cart'][$key]['quantity'] + $q;
				}

			}

		}
		else
		{
			$_SESSION['cart'][] = $product_arr;
		}
	}
	else
	{
		$_SESSION['cart'][] = $product_arr;
	}
	header("location:CartBody.php");

}
if($action_type=='remove_item')
{
	$index = $_GET['index'];
	if(isset($_SESSION['cart']))
	{
		unset($_SESSION['cart'][$index]);
		header("location:CartBody.php");
	}

}


?>
