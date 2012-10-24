<?php
/***********************************************************
    [EasyTalk] (C)2009 - 2011 nextsns.com
    This is NOT a freeware, use is subject to license terms

    @Filename CommentsViewModel.class.php $

    @Author hjoeson $

    @Date 2011-01-09 08:45:20 $
*************************************************************/

class CommentsViewModel extends ViewModel {
    public $viewFields = array(
        'Comments'=>array('comment_id','content_id','comment_body','dateline','_type'=>'LEFT'),
        'Users'=>array('user_id','user_name','nickname','user_head','user_auth','_on'=>'Comments.comment_uid=Users.user_id'),
    );
}
?>