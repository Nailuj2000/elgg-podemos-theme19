<?php
return array(

	/**
	 * ---------------------------------- TRADUCCION PARA LOS TEXTOS DEL PLUGIN GROUPS ----------------------------------
	 */

	/**
	 * Menu items and titles
	 */
	'groups' => "Groups",
	'groups:owned' => "Groups I own",
	'groups:owned:user' => 'Groups %s owns',
	'groups:yours' => "My groups",
	'groups:user' => "%s's groups",
	'groups:all' => "All groups",
	'groups:add' => "Create a new group",
	'groups:edit' => "Edit group",
	'groups:delete' => 'Delete group',
	'groups:membershiprequests' => 'Manage join requests',
	'groups:membershiprequests:pending' => 'Manage join requests (%s)',
	'groups:invitations' => 'Group invitations',
	'groups:invitations:pending' => 'Group invitations (%s)',

	'groups:icon' => 'Group icon (leave blank to leave unchanged)',
	'groups:name' => 'Group name',
	'groups:username' => 'Group short name (displayed in URLs, alphanumeric characters only)',
	'groups:description' => 'Description',
	'groups:briefdescription' => 'Brief description',
	'groups:interests' => 'Tags',
	'groups:website' => 'Website',
	'groups:members' => 'Group members',
	'groups:my_status' => 'My status',
	'groups:my_status:group_owner' => 'You own this group',
	'groups:my_status:group_member' => 'You are in this group',
	'groups:subscribed' => 'Group notifications on',
	'groups:unsubscribed' => 'Group notifications off',

	'groups:members:title' => 'Members of %s',
	'groups:members:more' => "View all members",
	'groups:membership' => "Group membership permissions",
	'groups:content_access_mode' => "Accessibility of group content",
	'groups:content_access_mode:warning' => "Warning: Changing this setting won't change the access permission of existing group content.",
	'groups:content_access_mode:unrestricted' => "Unrestricted - Access depends on content-level settings",
	'groups:content_access_mode:membersonly' => "Members Only - Non-members can never access group content",
	'groups:access' => "Access permissions",
	'groups:owner' => "Owner",
	'groups:owner:warning' => "Warning: if you change this value, you will no longer be the owner of this group.",
	'groups:widget:num_display' => 'Number of groups to display',
	'groups:widget:membership' => 'Group membership',
	'groups:widgets:description' => 'Display the groups you are a member of on your profile',

	'groups:widget:group_activity:title' => 'Group activity',
	'groups:widget:group_activity:description' => 'View the activity in one of your groups',
	'groups:widget:group_activity:edit:select' => 'Select a group',
	'groups:widget:group_activity:content:noactivity' => 'There is no activity in this group',
	'groups:widget:group_activity:content:noselect' => 'Edit this widget to select a group',

	'groups:noaccess' => 'No access to group',
	'groups:permissions:error' => 'You do not have the permissions for this',
	'groups:ingroup' => 'in the group',
	'groups:cantcreate' => 'You can not create a group. Only admins can.',
	'groups:cantedit' => 'You can not edit this group',
	'groups:saved' => 'Group saved',
	'groups:featured' => 'Featured groups',
	'groups:makeunfeatured' => 'Unfeature',
	'groups:makefeatured' => 'Make featured',
	'groups:featuredon' => '%s is now a featured group.',
	'groups:unfeatured' => '%s has been removed from the featured groups.',
	'groups:featured_error' => 'Invalid group.',
	'groups:joinrequest' => 'Request membership',
	'groups:join' => 'Join group',
	'groups:leave' => 'Leave group',
	'groups:invite' => 'Invite friends',
	'groups:invite:title' => 'Invite friends to this group',
	'groups:inviteto' => "Invite friends to '%s'",
	'groups:nofriends' => "You have no friends left who have not been invited to this group.",
	'groups:nofriendsatall' => 'You have no friends to invite!',
	'groups:viagroups' => "via groups",
	'groups:group' => "Group",
	'groups:search:tags' => "tag",
	'groups:search:title' => "Search for groups tagged with '%s'",
	'groups:search:none' => "No matching groups were found",
	'groups:search_in_group' => "Search in this group",
	'groups:acl' => "Group: %s",

	'discussion:topic:notify:summary' => 'New discussion topic called %s',
	'discussion:topic:notify:subject' => 'New discussion topic: %s',
	'discussion:topic:notify:body' =>
'%s added a new discussion topic to the group %s:

Title: %s

%s

View and reply to the discussion topic:
%s
',

	'discussion:reply:notify:summary' => 'New reply in topic: %s',
	'discussion:reply:notify:subject' => 'New reply in topic: %s',
	'discussion:reply:notify:body' =>
'%s replied to the discussion topic %s in the group %s:

%s

View and reply to the discussion:
%s
',

	'groups:activity' => "Group activity",
	'groups:enableactivity' => 'Enable group activity',
	'groups:activity:none' => "There is no group activity yet",

	'groups:notfound' => "Group not found",
	'groups:notfound:details' => "The requested group either does not exist or you do not have access to it",

	'groups:requests:none' => 'There are no current membership requests.',

	'groups:invitations:none' => 'There are no current invitations.',

	'item:object:groupforumtopic' => "Discussion topics",
	'item:object:discussion_reply' => "Discussion replies",

	'groupforumtopic:new' => "Add discussion post",

	'groups:count' => "groups created",
	'groups:open' => "open group",
	'groups:closed' => "closed group",
	'groups:member' => "members",
	'groups:searchtag' => "Search for groups by tag",

	'groups:more' => 'More groups',
	'groups:none' => 'No groups',

	/**
	 * Access
	 */
	'groups:access:private' => 'Closed - Users must be invited',
	'groups:access:public' => 'Open - Any user may join',
	'groups:access:group' => 'Group members only',
	'groups:closedgroup' => "This group's membership is closed.",
	'groups:closedgroup:request' => 'To ask to be added, click the "Request membership" menu link.',
	'groups:closedgroup:membersonly' => "This group's membership is closed and its content is accessible only by members.",
	'groups:opengroup:membersonly' => "This group's content is accessible only by members.",
	'groups:opengroup:membersonly:join' => 'To be a member, click the "Join group" menu link.',
	'groups:visibility' => 'Who can see this group?',

	/**
	 * Group tools
	 */
	'groups:enableforum' => 'Enable group discussion',
	'groups:lastupdated' => 'Last updated %s by %s',
	'groups:lastcomment' => 'Last comment %s by %s',

	/**
	 * Group discussion
	 */
	'discussion' => 'Discussion',
	'discussion:add' => 'Add discussion topic',
	'discussion:latest' => 'Latest discussion',
	'discussion:group' => 'Debatir',
	'discussion:none' => 'No discussion',
	'discussion:reply:title' => 'Reply by %s',

	'discussion:topic:created' => 'The discussion topic was created.',
	'discussion:topic:updated' => 'The discussion topic was updated.',
	'discussion:topic:deleted' => 'Discussion topic has been deleted.',

	'discussion:topic:notfound' => 'Discussion topic not found',
	'discussion:error:notsaved' => 'Unable to save this topic',
	'discussion:error:missing' => 'Both title and message are required fields',
	'discussion:error:permissions' => 'You do not have permissions to perform this action',
	'discussion:error:notdeleted' => 'Could not delete the discussion topic',

	'discussion:reply:edit' => 'Edit reply',
	'discussion:reply:deleted' => 'Discussion reply has been deleted.',
	'discussion:reply:error:notfound' => 'The discussion reply was not found',
	'discussion:reply:error:notdeleted' => 'Could not delete the discussion reply',

	'admin:groups' => 'Groups',

	'reply:this' => 'Reply to this',

	'group:replies' => 'Replies',
	'groups:forum:created' => 'Created %s with %d comments',
	'groups:forum:created:single' => 'Created %s with %d reply',
	'groups:forum' => 'Discussion',
	'groups:addtopic' => 'Add a topic',
	'groups:forumlatest' => 'Latest discussion',
	'groups:latestdiscussion' => 'Latest discussion',
	'groupspost:success' => 'Your reply was succesfully posted',
	'groupspost:failure' => 'There was problem while posting your reply',
	'groups:alldiscussion' => 'Latest discussion',
	'groups:edittopic' => 'Edit topic',
	'groups:topicmessage' => 'Topic message',
	'groups:topicstatus' => 'Topic status',
	'groups:reply' => 'Post a comment',
	'groups:topic' => 'Topic',
	'groups:posts' => 'Posts',
	'groups:lastperson' => 'Last person',
	'groups:when' => 'When',
	'grouptopic:notcreated' => 'No topics have been created.',
	'groups:topicclosed' => 'Closed',
	'grouptopic:created' => 'Your topic was created.',
	'groups:topicsticky' => 'Sticky',
	'groups:topicisclosed' => 'This discussion is closed.',
	'groups:topiccloseddesc' => 'This discussion is closed and is not accepting new comments.',
	'grouptopic:error' => 'Your group topic could not be created. Please try again or contact a system administrator.',
	'groups:forumpost:edited' => "You have successfully edited the forum post.",
	'groups:forumpost:error' => "There was a problem editing the forum post.",

	'groups:privategroup' => 'This group is closed. Requesting membership.',
	'groups:notitle' => 'Groups must have a title',
	'groups:cantjoin' => 'Can not join group',
	'groups:cantleave' => 'Could not leave group',
	'groups:removeuser' => 'Remove from group',
	'groups:cantremove' => 'Cannot remove user from group',
	'groups:removed' => 'Successfully removed %s from group',
	'groups:addedtogroup' => 'Successfully added the user to the group',
	'groups:joinrequestnotmade' => 'Could not request to join group',
	'groups:joinrequestmade' => 'Requested to join group',
	'groups:joined' => 'Successfully joined group!',
	'groups:left' => 'Successfully left group',
	'groups:notowner' => 'Sorry, you are not the owner of this group.',
	'groups:notmember' => 'Sorry, you are not a member of this group.',
	'groups:alreadymember' => 'You are already a member of this group!',
	'groups:userinvited' => 'User has been invited.',
	'groups:usernotinvited' => 'User could not be invited.',
	'groups:useralreadyinvited' => 'User has already been invited',
	'groups:invite:subject' => "%s you have been invited to join %s!",
	'groups:updated' => "Last reply by %s %s",
	'groups:started' => "Started by %s",
	'groups:joinrequest:remove:check' => 'Are you sure you want to remove this join request?',
	'groups:invite:remove:check' => 'Are you sure you want to remove this invitation?',
	'groups:invite:body' => "Hi %s,

%s invited you to join the '%s' group. Click below to view your invitations:

%s",

	'groups:welcome:subject' => "Welcome to the %s group!",
	'groups:welcome:body' => "Hi %s!

You are now a member of the '%s' group! Click below to begin posting!

%s",

	'groups:request:subject' => "%s has requested to join %s",
	'groups:request:body' => "Hi %s,

%s has requested to join the '%s' group. Click below to view their profile:

%s

or click below to view the group's join requests:

%s",

	/**
	 * Forum river items
	 */

	'river:create:group:default' => '%s created the group %s',
	'river:join:group:default' => '%s joined the group %s',
	'river:create:object:groupforumtopic' => '%s added a new discussion topic %s',
	'river:reply:object:groupforumtopic' => '%s replied on the discussion topic %s',
	'river:reply:view' => 'view reply',

	'groups:nowidgets' => 'No widgets have been defined for this group.',


	'groups:widgets:members:title' => 'Group members',
	'groups:widgets:members:description' => 'List the members of a group.',
	'groups:widgets:members:label:displaynum' => 'List the members of a group.',
	'groups:widgets:members:label:pleaseedit' => 'Please configure this widget.',

	'groups:widgets:entities:title' => "Objects in group",
	'groups:widgets:entities:description' => "List the objects saved in this group",
	'groups:widgets:entities:label:displaynum' => 'List the objects of a group.',
	'groups:widgets:entities:label:pleaseedit' => 'Please configure this widget.',

	'groups:forumtopic:edited' => 'Forum topic successfully edited.',

	'groups:allowhiddengroups' => 'Do you want to allow private (invisible) groups?',
	'groups:whocancreate' => 'Who can create new groups?',

	/**
	 * Action messages
	 */
	'group:deleted' => 'Group and group contents deleted',
	'group:notdeleted' => 'Group could not be deleted',

	'group:notfound' => 'Could not find the group',
	'grouppost:deleted' => 'Group posting successfully deleted',
	'grouppost:notdeleted' => 'Group posting could not be deleted',
	'groupstopic:deleted' => 'Topic deleted',
	'groupstopic:notdeleted' => 'Topic not deleted',
	'grouptopic:blank' => 'No topic',
	'grouptopic:notfound' => 'Could not find the topic',
	'grouppost:nopost' => 'Empty post',
	'groups:deletewarning' => "Are you sure you want to delete this group? There is no undo!",

	'groups:invitekilled' => 'The invite has been deleted.',
	'groups:joinrequestkilled' => 'The join request has been deleted.',
	'groups:error:addedtogroup' => "Could not add %s to the group",
	'groups:add:alreadymember' => "%s is already a member of this group",

	/**
	 * ecml
	 */
	'groups:ecml:discussion' => 'Group Discussions',
	'groups:ecml:groupprofile' => 'Group profiles',

	/**
	 * ---------------------------------- TRADUCCION PARA LOS TEXTOS DEL PLUGIN PAGES ----------------------------------
	 */

	/**
	 * Menu items and titles
	 */

	'pages' => "Pages",
	'pages:owner' => "%s's pages",
	'pages:friends' => "Friends' pages",
	'pages:all' => "All site pages",
	'pages:add' => "Add a page",

	'pages:group' => "Informarme",
	'groups:enablepages' => 'Enable group pages',

	'pages:new' => "A new page",
	'pages:edit' => "Edit this page",
	'pages:delete' => "Delete this page",
	'pages:history' => "History",
	'pages:view' => "View page",
	'pages:revision' => "Revision",
	'pages:current_revision' => "Current Revision",
	'pages:revert' => "Revert",

	'pages:navigation' => "Navigation",

	'pages:notify:summary' => 'New page called %s',
	'pages:notify:subject' => "A new page: %s",
	'pages:notify:body' =>
'%s added a new page: %s

%s

View and comment on the page:
%s
',
	'item:object:page_top' => 'Top-level pages',
	'item:object:page' => 'Pages',
	'pages:nogroup' => 'This group does not have any pages yet',
	'pages:more' => 'More pages',
	'pages:none' => 'No pages created yet',

	/**
	* River
	**/

	'river:create:object:page' => '%s created a page %s',
	'river:create:object:page_top' => '%s created a page %s',
	'river:update:object:page' => '%s updated a page %s',
	'river:update:object:page_top' => '%s updated a page %s',
	'river:comment:object:page' => '%s commented on a page titled %s',
	'river:comment:object:page_top' => '%s commented on a page titled %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'Page title',
	'pages:description' => 'Page text',
	'pages:tags' => 'Tags',
	'pages:parent_guid' => 'Parent page',
	'pages:access_id' => 'Read access',
	'pages:write_access_id' => 'Write access',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'No access to page',
	'pages:cantedit' => 'You cannot edit this page',
	'pages:saved' => 'Page saved',
	'pages:notsaved' => 'Page could not be saved',
	'pages:error:no_title' => 'You must specify a title for this page.',
	'pages:delete:success' => 'The page was successfully deleted.',
	'pages:delete:failure' => 'The page could not be deleted.',
	'pages:revision:delete:success' => 'The page revision was successfully deleted.',
	'pages:revision:delete:failure' => 'The page revision could not be deleted.',
	'pages:revision:not_found' => 'Cannot find this revision.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Last updated %s by %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Revision created %s by %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Number of pages to display',
	'pages:widget:description' => "This is a list of your pages.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "View page",
	'pages:label:edit' => "Edit page",
	'pages:label:history' => "Page history",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "This page",
	'pages:sidebar:children' => "Sub-pages",
	'pages:sidebar:parent' => "Parent",

	'pages:newchild' => "Create a sub-page",
	'pages:backtoparent' => "Back to '%s'",

	/**
	 * Bookmarks
	 */
	'groups:bookmarks:' => "Groups links",
	'grups:bookmarks:more' => "View all links",
	'groups:bookmarks:none' => "No more links",

);
