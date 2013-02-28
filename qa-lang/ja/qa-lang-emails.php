<?php
	
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-include/qa-lang-emails.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Language phrases for email notifications
	Translator: sama55 @ http://cmsbox.jp/

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

	return array(
		'a_commented_body' => "^site_title のあなたの回答に^c_handleさんからコメントが投稿されました。\n\n^open^c_content^close\n\nあなたの回答:\n\n^open^c_context^close\n\nコメントする場合は下をクリック:\n\n^url\n\n^site_title",
		'a_commented_subject' => '【^site_title】回答にコメントが投稿されました。',

		'a_followed_body' => "^site_title のあなたの回答に^q_handleさんから関連する質問が投稿されました。\n\n^open^q_title^close\n\nあなたの回答:\n\n^open^a_content^close\n\n質問に回答する場合は下をクリック:\n\n^url\n\n^site_title",
		'a_followed_subject' => '【^site_title】関連質問が投稿されました。',

		'a_selected_body' => "おめでとうございます！^site_title の下の回答が^s_handleさんからベストアンサーに選ばれました。\n\n^open^a_content^close\n\n質問:\n\n^open^q_title^close\n\nあなたの回答は下をクリック:\n\n^url\n\n^site_title",
		'a_selected_subject' => '【^site_title】回答がベストアンサーに選ばれました！',

		'c_commented_body' => "^site_title のあなたのコメントの後に^c_handleさんからコメントが追加されました。\n\n^open^c_content^close\n\nコメント対象の発言：\n\n^open^c_context^close\n\nコメントする場合は下をクリック:\n\n^url\n\n^site_title",
		'c_commented_subject' => '【^site_title】コメントが追加されました。',

		'confirm_body' => "下のリンクをクリックしてあなたのメールアドレスを認証してください。\n\n^url\n\n^site_title",
		'confirm_subject' => '【^site_title】メールアドレスの確認',

		'feedback_body' => "コメント:\n^message\n\n名前:\n^name\n\nメールアドレス:\n^email\n\n送付ページ:\n^previous\n\nユーザー:\n^url\n\nIPアドレス:\n^ip\n\nブラウザ:\n^browser",
		'feedback_subject' => '【^】問い合わせ',

		'flagged_body' => "^p_handle さんの投稿に ^flags がありました。\n\n^open^p_context^close\n\n投稿は下をクリック:\n\n^url\n\n^site_title",
		'flagged_subject' => '【^site_title】通報がありました。',

		'moderate_body' => "^p_handle さんの投稿を承認してください。\n\n^open^p_context^close\n\n投稿の承認／否認は下をクリック:\n\n^url\n\n^site_title",
		'moderate_subject' => '【^site_title】投稿を承認してください。',

		'new_password_body' => "^site_title のあなたの新しいパスワードをお知らせします。\n\nパスワード: ^password\n\nログイン後すぐにこのパスワードを変更することをお勧めします。\n\n^site_title\n^url",
		'new_password_subject' => '【^site_title】パスワード変更のお知らせ',

		'private_message_body' => "^f_handleさんからプライベートメッセージを受信しました。\n\n^open^message^close\n\n^more\n\n^site_title\n\nマイアカウントでプライベートメッセーをブロックできます。\n^a_url",
		'private_message_info' => "^f_handleさんの情報\n\n^url\n\n",
		'private_message_reply' => "返信は下をクリック\n^url",
		'private_message_subject' => '【^site_title】プライベートメッセージ',

		'q_answered_body' => "^site_title のあなたの質問に^a_handleさんから回答が投稿されました。\n\n^open^a_content^close\n\nあなたの質問:\n\n^open^q_title^close\n\n回答は下をクリック:\n\n^url\n\n^site_title",
		'q_answered_subject' => '【^site_title】質問に回答が投稿されました。',

		'q_commented_body' => "^site_title のあなたの質問に^c_handleさんからコメントが投稿されました。\n\n^open^c_content^close\n\nあなたの質問:\n\n^open^c_context^close\n\nコメントする場合は下をクリック:\n\n^url\n\n^site_title",
		'q_commented_subject' => '【^site_title】質問にコメントが投稿されました。',

		'q_posted_body' => "^site_title に^q_handleさんから質問が投稿されました。\n\n^open^q_title\n\n^q_content^close\n\n質問は下をクリック:\n\n^url\n\n^site_title",
		'q_posted_subject' => '【^site_title】質問が投稿されました。',

		'reset_body' => "^site_title のあなたのパスワードをリセットする場合は下をクリック:\n\n^url\n\nまたは、ページ内のフィールドに下のコードを入力:\n\nコード: ^code\n\nパスワードをリセットしない場合は、このメールは無視してください。\n\n^site_title",
		'reset_subject' => '【^site_title】パスワードリセットのお知らせ',

		'to_handle_prefix' => "^ さん\n\n",

		'welcome_body' => "^site_title のユーザー登録ありがとうございます。\n\n^custom^confirmログイン情報:\n\nメールアドレス: ^email\nパスワード: ^password\n\n後で参照できるように、この情報は大切に保管してください。\n\n^site_title\n^url",
		'welcome_confirm' => "下のリンクをクリックしてあなたのメールアドレスを認証してください。\n\n^url\n\n",
		'welcome_subject' => '【^site_title】ユーザー登録通知',
	);
	

/*
	Omit PHP closing tag to help avoid accidental output
*/