<?php
/**单链表数据结构
 * 数据节点+后继指针的结构
 * 因为php中没有链表这个结构，没办法只能把对象看做一个整体
 */
class Node
{
	public $key;  
	public $value;
	public $next;
	function __construct($key,$value)
	{
		$this->key=$key;
		$this->value=$value;
		$this->next=null;
	}
}

/**
 * 对链表进行操作
 */
class Linklist 
{
	public $head;
	function __construct($key,$value)
	{
		$this->head=new Node($key,$value);
	}
	//添加节点数据 
    public function addLinkList($node) { 
        $current = $this->head;
        while (!is_null($current->next)) 
        { 
            if ($current->next->key > $node->key) 
            { 
                break; 
            } 
            $current = $current->next; 
        } 
        $current->next = $node; 
    }
    //输出节点数据
    public function GetLinkList()
    {
    	$current=$this->head;
    	if (is_null($current)) 
    	{
    		echo ("链表为空!"); 
            return;
    	}
    	echo'key:'.$current->key.'value:'.$current->value.'<br/>';
    	while (!is_null($current->next)) 
    	{
    		echo'key:'.$current->next->key.'value:'.$current->next->value.'<br/>';
    		$current=$current->next;
    	}
    }


    //返回节点数据数量
    public function LinkListLenth()
    {
    	$current=$this->head;
    	$i      =0;
    	if (!is_null($current)) 
    	{
    		if (!empty($current->key)) 
    		{
    			$i=1;
    		}
    		while(!is_null($current->next))
    		{
    			$i++;
    			$current=$current->next;	
    		}
    	}
   		return $i;
    }

    public function  Del($key)
    {
		$current=$this->head;
		if (!is_null($current)) 
		{
			$flag   =false;
			if($current->key==$key)
			{
				$this->head=$current->next;
				return $current;
			}
			while (!is_null($current->next)) 
			{
				if ($current->next->key==$key) 
				{
					$flag   =true; break;
				}
				$current=$current->next;
			}
			if ($flag) 
			{
				$current->next=$current->next->next;
				return $current;
			}else{
				echo "没有找到此key为".$key."的节点！";
				exit();
			}
		}			
		echo "链表已经清空无法执行删除操作！";
		exit();	
    }

    //删除链表节点 
    public function delLink($key) { 
        $current = $this->head; 
        $flag = false; 
        while ( $current->next != null ) { 
            if ($current->next->key == $key) { 
                $flag = true; 
                break; 
            } 
            $current = $current->next; 
        } 
        if ($flag) { 
            $current->next = $current->next->next; 
        } else { 
            echo "未找到key=" . $key . "的节点！<br>"; 
        } 
    }
    //清理链表
    public function Clear()
    {
    	$this->head=null;

    } 


}

$new_link_list    =new Linklist(1,'aaaaa');
$add_link_list    =$new_link_list->addLinkList(new Node(2,'bbbbbb'));
$add_link_list    =$new_link_list->addLinkList(new Node(3,'cccccc'));
$add_link_list    =$new_link_list->addLinkList(new Node(4,'dddddd'));
$add_link_list    =$new_link_list->addLinkList(new Node(5,'ffffff'));
$get_link_list    =$new_link_list->GetLinkList();
$del_link_list    =$new_link_list->Del(1);
$get_link_list    =$new_link_list->GetLinkList();
$count_link_list  =$new_link_list->LinkListLenth();
$clear_link_list  =$new_link_list->Clear();
$count_link_list  =$new_link_list->LinkListLenth();
$get_link_list    =$new_link_list->GetLinkList();







?>