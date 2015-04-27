<?php

$entity = elgg_extract("entity", $vars);

if (empty($entity) || !($entity instanceof ElggGroup)) {
	return;
}

$icon = elgg_view_entity_icon($entity, "medium");

$title = "<div><strong>" . elgg_view("output/url", array("text" => $entity->name, "href" => $entity->getURL(), "is_trusted" => true)) . "</strong></div>";

if ($entity->isPublicMembership()) {
	$status = "<div>" . elgg_echo("groups:open") . "</div>";
} else {
	$status = "<div>" . elgg_echo("groups:closed") . "</div>";
}

$owner = $entity->getOwnerEntity();

$owner_text = "<div class='mtm'>";
$owner_text .= "<strong>" . elgg_echo("groups:owner") . ": </strong>";
$owner_text .= elgg_view("output/url", array("text" => $owner->name, "href" => $owner->getURL(), "is_trusted" => true));
$owner_text .= "</div>";

$members = "<div>";
$members .= "<strong>" . elgg_echo('groups:members') . ": </strong>";
$members .= $entity->getMembers(0, 0, true);
$members .= "</div>";

$body = $title;
$body .= $status;
$body .= $owner_text;
$body .= $members;

echo elgg_view_image_block($icon, $body);