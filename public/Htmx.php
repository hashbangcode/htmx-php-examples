<?php

/**
 * Class to facilitate responding to HTMX requests.
 */
class Htmx
{

  /**
   * Is this a HTMX request?
   *
   * HTMX will send a request with the header hx-request, return true if this
   * header is present
   *
   * @return bool
   *   True if the request is a HTMX request.
   */
  public static function isHtmxRequest(): bool
  {
    return isset($_SERVER['HTTP_HX_REQUEST']) && $_SERVER['HTTP_HX_REQUEST'] === 'true';
  }

  /**
   * If this a boosted request?
   *
   * @return bool
   *   True if boosted.
   */
  public static function isBoosted(): bool
  {
    return isset($_SERVER['HTTP_HX_BOOSTED']) && $_SERVER['HTTP_HX_BOOSTED'] == 'true';
  }

  /**
   * Get the current URL from the HTMX request.
   *
   * @return string|null
   *   The URL, or null if this is not set.
   */
  public static function getCurrentUrl(): ?string
  {
    return $_SERVER['HTTP_HX_CURRENT_URL'] ?? null;
  }

  /**
   * Is this a history restore request.
   *
   * @return bool
   *   True if this is a history restore request.
   */
  public static function isHistoryRestoreRequest(): bool
  {
    return isset($_SERVER['HTTP_HX_HISTORY_RESTORE_REQUEST']) && $_SERVER['HTTP_HX_HISTORY_RESTORE_REQUEST'] == 'true';
  }

  /**
   * The user response to an hx-prompt.
   *
   * @return string|null
   *   The response.
   */
  public static function getPrompt(): ?string
  {
    return $_SERVER['HTTP_HX_PROMPT'] ?? null;
  }

  /**
   * The id of the target element if it exists.
   *
   * @return string|null
   *   The ID, or null if not set.
   */
  public static function getTarget(): ?string
  {
    return $_SERVER['HTTP_HX_TARGET'] ?? null;
  }

  /**
   * The name of the triggered element if it exists.
   *
   * @return string|null
   *   The name, or null if not set.
   */
  public static function getTriggerName(): ?string
  {
    return $_SERVER['HTTP_HX_TRIGGER_NAME'] ?? null;
  }

  /**
   * The id of the triggered element if it exists.
   *
   * @return string|null
   *   The ID, or null if ot set.
   */
  public static function getTrigger(): ?string
  {
    return $_SERVER['HTTP_HX_TRIGGER'] ?? null;
  }

  /**
   * Return a 204 response code for no content.
   */
  public static function noContent(): void
  {
    http_response_code(204);
  }

  /**
   * Return a 286 response code to calcel polling.
   */
  public static function cancelPolling(): void
  {
    http_response_code(286);
  }

  /**
   * Issues a HX-Location header.
   *
   * Send a location response header.
   *
   * @param array $locationData
   *   The location data
   *
   * @see https://htmx.org/headers/hx-location/
   */
  public static function sendLocation(array $locationData): void
  {
    header('HX-Location: ' . json_encode($locationData));
  }

  /**
   * Issues a HX-Push-Url header.
   *
   * Set pushes a new URL into the history stack.
   *
   * @param string $url
   *   The URL.
   *
   * @see https://htmx.org/headers/hx-push-url/
   */
  public static function pushUrl(string $url): void
  {
    header('HX-Push-Url: ' . $url);
  }

  /**
   * Issue a HX-Redirect header.
   *
   * Can be used to do a client-side redirect to a new location.
   *
   * @param string $url
   *   The new location.
   *
   * @see https://htmx.org/headers/hx-redirect/
   */
  public static function redirect(string $url): void
  {
    header('HX-Redirect: ' . $url);
  }

  /**
   * Issues a HX-Replace-Url header.
   *
   * Replaces the current URL in the location bar.
   *
   * @param string $url
   *   The url.
   */
  public static function replaceUrl(string $url): void
  {
    header('HX-Replace-Url: ' . $url);
  }

  /**
   * Issues a HX-Refresh header.
   *
   * if set to “true” the client-side will do a full refresh of the page.
   */
  public static function refresh(): void
  {
    header('HX-Refresh: true');
  }

  /**
   * Issues a HX-Reswap header.
   *
   * Allows you to specify how the response will be swapped.
   *
   * @param string $value
   *   The value of the reswap.
   *
   * @see https://htmx.org/attributes/hx-swap/
   */
  public static function reswap(string $value): void
  {
    header('HX-Reswap: ' . $value);
  }

  /**
   * Issue a HX-Retarget header.
   *
   * CSS selector that updates the target of the content update to a different
   * element on the page.
   *
   * @param string $selector
   *   The selector.
   */
  public static function retarget(string $selector): void
  {
    header('HX-Retarget: ' . $selector);
  }

  /**
   * Issues a HX-Location header.
   *
   * Allows you to do a client-side redirect that does not do a full page
   * reload.
   *
   * @param array $locationData
   *    The URL to redirect to.
   */
  public static function location(array $locationData): void
  {
    header('HX-Location: ' . json_encode($locationData));
  }

  /**
   * Issues a HX-Reselect header.
   *
   * A CSS selector that allows you to choose which part of the response is
   * used to be swapped in. Overrides an existing hx-select on the triggering
   * element.
   *
   * @param string $selector
   *   The selector.
   */
  public static function reselect(string $selector): void
  {
    header('HX-Reselect: ' . $selector);
  }

  /**
   * Is this a GET request?
   *
   * @return bool
   *   True if request is a GET request.
   */
  public static function isGet(): bool
  {
    return $_SERVER['REQUEST_METHOD'] === 'GET';
  }

  /**
   * Is this a POST request?
   *
   * @return bool
   *   True if request is a POST request.
   */
  public static function isPost(): bool
  {
    return $_SERVER['REQUEST_METHOD'] === 'POST';
  }

  /**
   * Is this a PUT request?
   *
   * @return bool
   *   True if request is a PUT request.
   */
  public static function isPut(): bool
  {
    return $_SERVER['REQUEST_METHOD'] === 'PUT';
  }

  /**
   * Is this a DELETE request?
   *
   * @return bool
   *   True if request is a DELETE request.
   */
  public static function isDelete(): bool
  {
    return $_SERVER['REQUEST_METHOD'] === 'DELETE';
  }

  /**
   * Is this a PATCH request?
   *
   * @return bool
   *   True if request is a PATCH request.
   */
  public static function isPatch(): bool
  {
    return $_SERVER['REQUEST_METHOD'] === 'PATCH';
  }

}
