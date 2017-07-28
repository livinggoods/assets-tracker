<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory ドメイン',
    'ad_domain_help'			=> '通常はemailのドメイン名と同じです。ただし例外あり',
    'is_ad'				        => 'Active Directory サーバー',
	'alert_email'				=> 'アラートの送信先',
	'alerts_enabled'			=> 'アラートを有効化',
	'alert_interval'			=> 'アラートを無視する期間',
	'alert_inv_threshold'		=> 'インベントリのアラート間隔',
	'asset_ids'					=> '資産ID',
	'auto_increment_assets'		=> '資産IDを自動採番で生成',
	'auto_increment_prefix'		=> 'プレフィクス (オプション)',
	'auto_incrementing_help'    => 'この初期値を使って資産IDの自動採番を有効化',
	'backups'					=> 'バックアップ',
	'barcode_settings'			=> 'バーコード設定',
    'confirm_purge'			    => 'パージを確定',
    'confirm_purge_help'		=> 'レコード削除のため、パージを実行するとき"DELETE"の文字を下のテキストボックスに入力します。このアクションは取り消しはできません。',
	'custom_css'				=> 'カスタム CSS:',
	'custom_css_help'			=> '使用したいカスタムCSSを入力してください。&lt;style&gt;&lt;/style&gt; タグは含めないでください',
	'default_currency'  		=> '既定の通貨',
	'default_eula_text'			=> '既定のEULA',
  'default_language'					=> '既定の言語',
	'default_eula_help_text'	=> '特殊な資産カテゴリーにカスタムEULAを関連付けられます。',
    'display_asset_name'        => '資産名を表示',
    'display_checkout_date'     => 'チェックアウト日を表示',
    'display_eol'               => '表形式でEOLを表示',
    'display_qr'                => 'QRコードを表示',
	'display_alt_barcode'		=> 'バーコードを表示',
	'barcode_type'				=> '2次元バーコードタイプ',
	'alt_barcode_type'			=> 'バーコードタイプ',
    'eula_settings'				=> 'EULA設定',
    'eula_markdown'				=> 'この EULA は、<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>で、利用可能です。',
    'general_settings'			=> '全般設定',
	'generate_backup'			=> 'バックアップを作成',
    'header_color'              => 'ヘッダーカラー',
    'info'                      => 'これらの設定は、あなたの設備の特性に合わせてカスタマイズできます。',
    'laravel'                   => 'Laravelバージョン',
    'ldap_enabled'              => 'LDAP 対応',
    'ldap_integration'          => 'LDAP 統合',
    'ldap_settings'             => 'LDAP 設定',
    'ldap_server'               => 'LDAP サーバ',
    'ldap_server_help'          => 'LDAP を使用開始 ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
	'ldap_server_cert'			=> 'LDAP SSL 認証',
	'ldap_server_cert_ignore'	=> '無効な SSL 証明書を許可します。',
	'ldap_server_cert_help'		=> '自己署名 SSL 証明書を使用して無効な SSL 証明書を受け入れたい場合は、このチェック ボックスを選択します。',
    'ldap_tls'                  => 'TLS の使用',
    'ldap_tls_help'             => 'これは、LDAP サーバーで STARTTLS を実行している場合にのみチェック必要があります。 ',
    'ldap_uname'                => 'LDAP バインド ユーザー名',
    'ldap_pword'                => 'LDAP バインド パスワード',
    'ldap_basedn'               => 'LDAP 検索ベース DN',
    'ldap_filter'               => 'LDAP フィルター',
    'ldap_pw_sync'              => 'LDAP Password Sync',
    'ldap_pw_sync_help'         => 'Uncheck this box if you do not wish to keep LDAP passwords synced with local passwords. Disabling this means that your users may not be able to login if your LDAP server is unreachable for some reason.',
    'ldap_username_field'       => 'ユーザー名フィールド',
    'ldap_lname_field'          => '姓',
    'ldap_fname_field'          => 'LDAP 名',
    'ldap_auth_filter_query'    => 'LDAP 認証クエリ',
    'ldap_version'              => 'LDAP バージョン',
    'ldap_active_flag'          => 'LDAP アクティブ フラグ',
    'ldap_emp_num'              => 'LDAP 社員番号',
    'ldap_email'                => 'LDAP メール',
    'load_remote_text'          => 'リモートスクリプト',
    'load_remote_help_text'		=> 'Snipe-ITのインストールは、外部からスクリプトを読み込むことが可能です。',
    'logo'                    	=> 'ロゴ',
    'full_multiple_companies_support_help_text' => 'ユーザー (管理者を含む) に 資産の割り当て を制限します。',
    'full_multiple_companies_support_text' => '複数企業をサポートします。',
    'optional'					=> 'オプション',
    'per_page'                  => 'ページ毎の結果',
    'php'                       => 'PHPバージョン',
    'php_gd_info'               => 'QRコードを表示するためにphp-gdをインストールする必要があります。インストールインストラクションを参照して下さい。',
    'php_gd_warning'            => 'PHP Image Processing および GD plugin が、インストールされていません。',
    'qr_help'                   => 'QRコードを有効化',
    'qr_text'                   => 'QRコードテキスト',
    'setting'                   => '設定',
    'settings'                  => '設定',
    'site_name'                 => 'サイト名',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slack integration はオプションです。しかしながら endpoint と channel は必須です。 Slack integration を設定するためには, まず初めに Slack アカウントで <a href=":slack_link" target="_new">incoming web hook を作成</a> して下さい。',
    'snipe_version'  			=> 'Snipe-IT バージョン',
    'system'                    => 'システム情報',
    'update'                    => '設定を更新',
    'value'                     => '価値',
    'brand'                     => 'ブランディング',
    'about_settings_title'      => '設定について',
    'about_settings_text'       => 'これらの設定は、あなたのインストレーションの特性に合わせてカスタマイズできます。',
    'labels_per_page'           => 'ページあたりのラベル数',
    'label_dimensions'          => 'ラベルの大きさ (インチ)',
    'page_padding'             => 'ページ マージン',
    'purge'                    => 'データレコードを消去',
    'labels_display_bgutter'    => 'ラベル 下余白',
    'labels_display_sgutter'    => 'ラベル横余白',
    'labels_fontsize'           => 'ラベルフォントサイズ',
    'labels_pagewidth'          => 'ラベルシート幅',
    'labels_pageheight'         => 'ラベルシート高さ',
    'label_gutters'        => 'ラベルの間隔 (インチ)',
    'page_dimensions'        => 'ページサイズ（インチ）',
    'label_fields'          => 'ラベル表示フィールド',
    'inches'        => 'インチ',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'two_factor'        => 'Two Factor Authentication',
    'two_factor_secret'        => 'Two-Factor Code',
    'two_factor_enrollment'        => 'Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Enable Two Factor',
    'two_factor_reset'        => 'Reset Two-Factor Secret',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with Google Authenticator again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Two factor device successfully reset',
    'two_factor_reset_error'          => 'Two factor device reset failed',
    'two_factor_enabled_warning'        => 'Enabling two-factor if it is not currently enabled will immediately force you to authenticate with a Google Auth enrolled device. You will have the ability to enroll your device if one is not currently enrolled.',
    'two_factor_enabled_help'        => 'This will turn on two-factor authentication using Google Authenticator.',
    'two_factor_optional'        => 'Selective (Users can enable or disable if permitted)',
    'two_factor_required'        => 'Required for all users',
    'two_factor_disabled'        => 'Disabled',
    'two_factor_enter_code'	=> 'Enter Two-Factor Code',
    'two_factor_config_complete'	=> 'Submit Code',
    'two_factor_enabled_edit_not_allowed' => 'Your administrator does not permit you to edit this setting.',
    'two_factor_enrollment_text'	=> "Two factor authentication is required, however your device has not been enrolled yet. Open your Google Authenticator app and scan the QR code below to enroll your device. Once you've enrolled your device, enter the code below",
    'require_accept_signature'      => 'Require Signature',
    'require_accept_signature_help_text'      => 'Enabling this feature will require users to physically sign off on accepting an asset.',
    'left'        => '左',
    'right'        => '右',
    'top'        => '上',
    'bottom'        => '下',
    'vertical'        => '垂直',
    'horizontal'        => '水平方向',
    'zerofill_count'        => '資産タグの長さ (ゼロ埋め含む)',
);
