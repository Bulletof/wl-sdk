<?php

namespace WellnessLiving\Wl\Appointment\Book\Purchase;

use WellnessLiving\WlModelAbstract;

/**
 * An endpoint that retrieves information about service categories.
 */
class PurchaseModel extends WlModelAbstract
{
  /**
   * Data about login prize which can be used to pay for service.
   * <dl>
   *   <dt>int <var>i_count</var></dt><dd>Login prize remaining quantity.</dd>
   *   <dt>string <var>k_login_prize</var></dt><dd>Key of login prize.</dd>
   *   <dt>string <var>text_description</var></dt><dd>User friendly login prize description.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_login_prize;

  /**
   * A list of the client`s login promotions that can be applied to a given service.
   * <dl>
   *   <dt>array <var>a_login_promotion_info</var></dt>
   *   <dd>
   *      Information about the Purchase Option. It contains the following information:
   *      <dl>
   *        <dt>int <var>i_limit</var></dt>
   *        <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *        <dt>int|null <var>i_limit_duration</var></dt>
   *        <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *        <dt>int <var>i_remain</var></dt>
   *        <dd>The count of the remaining visits.</dd>
   *        <dt>int|null <var>i_remain_duration</var></dt>
   *        <dd>The number of minutes left in this Purchase Option.</dd>
   *      </dl>
   *   </dd>
   *   <dt>string[] <var>a_visit_limit</var></dt>
   *   <dd>The list of calendar restrictions of the Purchase Option. For example, four per week.</dd>
   *   <dt>array <var>a_restrict</var></dt>
   *   <dd>Data about the shortest restriction period:
   *     <dl>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the shortest restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the shortest restriction period.</dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of the shortest restriction period. For example "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>array[] <var>a_restrict_data</var></dt>
   *   <dd>Data about all restriction periods. Given as an array, where each record has the following structure:
   *     <dl>
   *       <dt>int <var>i_book</var></dt>
   *       <dd>The count of future sessions that are paid with this Purchase Option.</dd>
   *       <dt>int <var>i_limit</var></dt>
   *       <dd>The limit of visits for the restriction period.</dd>
   *       <dt>int <var>i_remain</var></dt>
   *       <dd>The number of remaining visits for the restriction period.</dd>
   *       <dt>int <var>i_use</var></dt>
   *       <dd>The usage count of the Purchase Option.</dd>
   *       <dt>int <var>i_visit_past</var></dt>
   *       <dd>
   *         The count of attended sessions before the last renewal.
   *         This will be `0` if no sessions before the last renewal or if the Purchase Option doesn't auto-renew.
   *       </dd>
   *       <dt>string <var>text_restriction</var></dt>
   *       <dd>The description of restriction period. For example, "this week" or "for a four-day period".</dd>
   *     </dl>
   *   </dd>
   *   <dt>int <var>i_limit</var></dt>
   *   <dd>The count of visits that the Purchase Option allows the client to make.</dd>
   *   <dt>int|null <var>i_limit_duration</var></dt>
   *   <dd>The maximum number of minutes that current Purchase Option can be used for.</dd>
   *   <dt>int <var>id_program</var></dt>
   *   <dd>The program ID for promotions. One of the {@link \WellnessLiving\WlProgramSid} constants.</dd>
   *   <dt>string <var>k_login_promotion</var></dt>
   *   <dd>The Purchase Option login key.</dd>
   *   <dt>string <var>s_class_include</var></dt>
   *   <dd>The list of services provided by this Purchase Option.</dd>
   *   <dt>string <var>s_description</var></dt>
   *   <dd>The Purchase Option description.</dd>
   *   <dt>string <var>s_duration</var></dt>
   *   <dd>The Purchase Option duration.</dd>
   *   <dt>string <var>s_title</var></dt>
   *   <dd>The Purchase Option name.</dd>
   *   <dt>string <var>text_package_item</var></dt>
   *   <dd>If this Purchase Option is a package, then this field contains a list of Purchase Options contained in the package.</dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_login_promotion;

  /**
   * An array with information about available Purchase Options.
   * <dl>
   *   <dt>
   *     array <var>a_image</var>
   *   </dt>
   *   <dd>
   *     Logo of the purchase option. Result of the {@link RsPromotionImageLogo::image()} method.
   *   </dd>
   *   <dt>
   *     string[] <var>a_visit_limit</var>
   *   </dt>
   *   <dd>
   *     List of calendar restrictions of the promotion, for example, 4 per week.
   *   </dd>
   *   <dt>
   *     string <var>dt_expire</var>
   *   </dt>
   *   <dd>
   *     Date, when promotion expires.
   *   </dd>
   *   <dt>
   *     string <var>dt_start</var>
   *   </dt>
   *   <dd>
   *     Date, when promotion starts.
   *   </dd>
   *   <dt>
   *     int <var>i</var>
   *   </dt>
   *   <dd>
   *     Order number of the purchase option in the list.
   *   </dd>
   *   <dt>
   *     int <var>i_limit</var>
   *   </dt>
   *   <dd>
   *     Count of visits that purchase option allows to make.
   *   </dd>
   *   <dt>
   *     int|null <var>i_limit_duration</var>
   *   </dt>
   *   <dd>
   *     Maximum number of minutes that current promotion can be used.
   *   </dd>
   *   <dt>
   *     int <var>i_payment_period</var>
   *   </dt>
   *   <dd>
   *     Count of calendar periods (weeks, months, years) between payment for membership.
   *   </dd>
   *   <dt>
   *     int <var>id_duration</var>
   *   </dt>
   *   <dd>
   *     Duration ID. Constant from {@link \WellnessLiving\Core\a\ADurationSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program</var>
   *   </dt>
   *   <dd>
   *     Program ID for promotions from {@link \WellnessLiving\WlProgramSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_program_type</var>
   *   </dt>
   *   <dd>
   *     Program type ID. Constant from {@link \WellnessLiving\WlProgramTypeSid}.
   *   </dd>
   *   <dt>
   *     int <var>id_purchase_item</var>
   *   </dt>
   *   <dd>
   *     ID of the purchase item from {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}
   *   </dd>
   *   <dt>
   *     bool <var>is_description</var>
   *   </dt>
   *   <dd>
   *     `true` if purchase option has description.
   *   </dd>
   *   <dt>
   *     bool <var>is_introductory</var>
   *   </dt>
   *   <dd>
   *     `true` if promotion is introductory offer, `false` otherwise.
   *   </dd>
   *   <dt>
   *     int <var>k_id</var>
   *   </dt>
   *   <dd>
   *     Primary ID of the element in it's table.
   *   </dd>
   *   <dt>
   *     string|null [<var>m_price_old</var>]
   *   </dt>
   *   <dd>
   *     Price of single session purchase before online discount. `null` if service does not have online discount.
   *     Is set only if this purchase option is purchase of single visit.
   *   </dd>
   *   <dt>
   *     string <var>s_activation</var>
   *   </dt>
   *   <dd>
   *     Activation settings of the promotion.
   *   </dd>
   *   <dt>
   *     string <var>s_class</var>
   *   </dt>
   *   <dd>
   *     Class for designer to mark purchase options with different icons.
   *   </dd>
   *   <dt>
   *     string <var>s_class_include</var>
   *   </dt>
   *   <dd>
   *     List of included in the promotion services.
   *   </dd>
   *   <dt>
   *     string <var>s_description</var>
   *   </dt>
   *   <dd>
   *     Description of the purchase option.
   *   </dd>
   *   <dt>
   *     string <var>s_duration</var>
   *   </dt>
   *   <dd>
   *     Duration of the promotion.
   *   </dd>
   *   <dt>
   *     string <var>s_payment_duration</var>
   *   </dt>
   *   <dd>
   *     Period between payments for memberships.
   *   </dd>
   *   <dt>
   *     string <var>sid_program_category</var>
   *   </dt>
   *   <dd>
   *     Category of the program for promotions from {@link \WellnessLiving\WlProgramCategorySid}.
   *   </dd>
   *   <dt>
   *     string <var>s_title</var>
   *   </dt>
   *   <dd>
   *     Name of the purchase option.
   *   </dd>
   *   <dt>
   *     string <var>s_value</var>
   *   </dt>
   *   <dd>
   *     Key of the purchase option in the format [<var>purchase_item_id</var>]::[<var>k_id</var>]
   *   </dd>
   *   <dt>
   *     string <var>text_package_item</var>
   *   </dt>
   *   <dd>
   *     If this promotion is a package. This field contains list of promotions contained in the package.
   *   </dd>
   * </dl>
   *
   * @get result
   * @var array[]
   */
  public $a_purchase;

  /**
   * List of redeemable prizes which can be used to pay for service.
   * <dl>
   *   <dt>int <var>i_score</var></dt><dd>Prize price in points.</dd>
   *   <dt>string <var>k_reward_prize</var></dt><dd>Key of redeemable prize..</dd>
   *   <dt>string <var>text_description</var></dt><dd>User friendly prize description.</dd>
   * </dl>
   *
   * @get result
   * @var array
   */
  public $a_reward_prize;

  /**
   * List of selected services without current {@link \WellnessLiving\Wl\Appointment\Book\Purchase\PurchaseModel::$k_service}.
   *
   * The list of these services directly affects the list of selected promotions.
   * Depending on the number and order of services, there may be different results.
   *
   * The current {@link \WellnessLiving\Wl\Appointment\Book\Purchase\PurchaseModel::$k_service} will be added to the end of this list.
   * It is worth considering this list as a list of previously selected services.
   *
   * Each element has the following structure:
   * <dl>
   *  <dt>array <var>a_purchase</var></dt>
   *  <dd>
   *    List of purchase options selected for the service.
   *    Should be set if a new purchase option is selected for this service.
   *    <dl>
   *      <dt>int <var>id_purchase_item</var></dt>
   *      <dd>Purchase item ID. Constant from {@link \WellnessLiving\Wl\Purchase\Item\WlPurchaseItemSid}.</dd>
   *      <dt>string <var>k_id</var></dt>
   *      <dd>Purchase item key.</dd>
   *    </dl>
   *  </dd>
   *  <dt>string <var>dt_date</var></dt>
   *  <dd>Local date/time to check purchase options expiration.</dd>
   *  <dt>string|null <var>k_login_prize</var></dt>
   *  <dd>
   *    Login prize key.
   *    `null` if no login prize used to pay for this service.
   *  </dd>
   *  <dt>string|null <var>k_login_promotion</var></dt>
   *  <dd>
   *    Login promotion key.
   *    Should be set if login promotion selected for this service.
   *  </dd>
   *  <dt>string <var>k_service</var></dt>
   *  <dd>Service key from {@link \RsServiceSql}.</dd>
   * </dl>
   *
   * @get get
   * @var array[]
   */
  public $a_service = [];

  /**
   * Session pass information in a case if user books same appointment second time and already has Drop-in.
   *
   * @get result
   * @var array
   */
  public $a_session_pass = [];

  /**
   * List of user keys to book appointments - primary keys in {@link \PassportLoginSql}.
   * There may be empty values in this list, which means that this is a walk-in.
   *
   * @get get
   * @post get
   * @var string[]
   */
  public $a_uid = [];

  /**
   * The date to use to check for expiration of Purchase Options.
   *
   * @get get
   * @var string
   */
  public $dt_date = '';

  /**
   * The asset booking duration.
   *
   * @get get
   * @var int
   */
  public $i_duration = 0;

  /**
   * Image height in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size {@link RsLoginLogo::THUMBNAIL_HEIGHT}.
   *
   * @get get
   * @var int|null
   */
  public $i_height = 0;

  /**
   * Image width in pixels. Please specify this value if you need image to be returned in specific size.
   * In case this value is not specified returned image will have default thumbnail size {@link RsLoginLogo::THUMBNAIL_WIDTH}.
   *
   * @get get
   * @var int|null
   */
  public $i_width = 0;

  /**
   * `true` - get all Purchase Options suitable for appointment.
   * `false` - get only Purchase Options available for the client.
   *
   * @get get
   * @var bool
   */
  public $is_backend = false;

  /**
   * `true` if client is walk-in, otherwise `false`.
   *
   * @get get
   * @post get
   * @var bool
   */
  public $is_walk_in = false;

  /**
   * Location to show available appointment booking schedule.
   *
   * @get get,result
   * @post get
   * @var string
   */
  public $k_location = '0';

  /**
   * The Purchase Option ID used to pay for the appointment.
   *
   * This will be `null` if the client doesn't have a suitable Purchase Option.
   *
   * @get get,result
   * @var string
   */
  public $k_login_promotion;

  /**
   * The resource key.
   *
   * @get get
   * @var string
   */
  public $k_resource = '0';

  /**
   * The service key used to select available Purchase Options.
   * If multiple services are selected, they should be specified in {@link \WellnessLiving\Wl\Appointment\Book\Purchase\PurchaseModel::$a_service} array.
   *
   * @get get
   * @var string
   */
  public $k_service = '0';

  /**
   * Key of timezone.
   *
   * `null` if not set then use default client timezone {@link Wl\Profile\Timezone\ProfileTimezone::createInBusiness()}.
   *
   * @get get
   * @var string|null
   */
  public $k_timezone;

  /**
   * Login promotion title suitable to pay for the services.
   *
   * @get result
   * @var string
   */
  public $text_login_promotion = '';

  /**
   * User to get information for.
   *
   * @get get
   * @post get
   * @var string
   */
  public $uid = '0';
}

?>