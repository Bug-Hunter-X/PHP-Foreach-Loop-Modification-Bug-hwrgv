function foo(array $arr): void {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      $keysToRemove[] = $key;
    }
  }

  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
}